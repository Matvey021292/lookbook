<?php

namespace App\Http\Controllers;


use App\Repositories\BookRepository;
use App\Repositories\RecentlyViewedRepository;
use App\Repositories\CategoryRepository;
use Illuminate\Http\Request;
use App\Convert;
use App\Filepath;
use App\Events\BookHasViewed;
use Illuminate\Support\Arr;


class BookController extends SiteController
{

    public function __construct( RecentlyViewedRepository $review_repository, BookRepository $book_rep, CategoryRepository $genre_rep)
    {
        parent::__construct(new \App\Repositories\MenusRepository(new \App\Menu));
        $this->book_rep = $book_rep;
        $this->genre_rep = $genre_rep;
        $this->review_repository = $review_repository;

        $this->template = env('THEME') . '.book';
    }

    public function show($alias = false)
    {
        $book = $this->book_rep->getModel($alias);
        if(empty($book)) return redirect()->back()->withErrors(__("Книги не найдено"));

        event(new BookHasViewed($book));

        $series = $this->getSeriesBooks($book);
        $formats = ['fb2', 'epub', 'mobi'];

        $content = view(env('THEME') . '.book_content')->with('book', $book)->with('series', $series)->render();
        $aside = view(env('THEME'). '.book_aside')->with('formats',$formats)->with('book', $book)->render();


        $this->vars = Arr::add($this->vars, 'content', $content);
        $this->vars = Arr::add($this->vars, 'book', $book);
        $this->vars = Arr::add($this->vars, 'aside', $aside);


        $this->review_repository->addView($book->id);

        return $this->renderOutput();
    }

    public function getSeriesBooks($book){
        $series = '';
        if($book->category->isNotEmpty()){
            $series_id = $book->category->first()->id;
            $series = $this->genre_rep->getCategory($series_id);
        }
        return $series;
    }

    public function download(Request $request){
        $files_upload = $this->dir_files_path;
        dd($files_upload);
        $format = $request->input('format');
        $book_id = $request->input('file');
        $book = $this->book_rep->getModel($book_id);


        if(!$request->input('init')){
            if($book->path){
                $path = $this->book_rep->convert($book->path->Path, $format);
                return response()->json(['status' => 'success', 'message'=> url("{$files_upload}{$path}")]);
            }

            $path_file  = $book->path->Path;
            $request_name = str_replace($format, 'fb2.zip', $path_file);
            if(!file_exists(public_path() .'/uploads/files/'. parse_url($request_name, PHP_URL_PATH))) return;
            $convert = new Convert(public_path() .'/uploads/files/'. parse_url($request_name, PHP_URL_PATH), $format);
            return response()->json(['status' => 'success', 'message'=> $convert]);

        }else{

            if($book->path || !file_exists(public_path($book->path))){

                return response()->json(['status' => 'error', 'message'=> __('Book exist')]);

            }else{

                $request_path = Config::get('settings.replace_url') . "/b/{$book_id}/{$format}";
                $path = public_path("uploads/files/{$book_id}/{$format}/");

                if(!is_dir($path)){
                    File::makeDirectory($path, 0775, true);
                }

                $attachment = get_headers($request_path, 1);
                if( $attachment && isset($attachment['Content-Disposition'])){
                    preg_match('/\s*=\s*([\S\s]+)/i  ', $attachment['Content-Disposition'], $match);
                    if(isset($match[1])){

                        $name = str_replace('"', '', $match[1]);
                        file_put_contents($path . $name, fopen($request_path, 'r'));
                        if(!$book->path){
                            $filepath = new Filepath;
                            $filepath->Path = "{$book_id}/{$format}/" . $name;
                            $filepath->book_ID = $book_id;
                            $filepath->Format = $book->FileType;
                            $filepath->save();
                        }
                    }
                }
                return response()->json(['status' => 'error', 'message'=> __('save book')]);
            }
        }

    }

}
