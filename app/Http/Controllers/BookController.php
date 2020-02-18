<?php

namespace App\Http\Controllers;

use Config;
use DB;
use Illuminate\Support\Facades\Auth;
use App\Repositories\BookRepository;
use App\Repositories\RecentlyViewedRepository;
use App\Repositories\CategoryRepository;
use Illuminate\Http\Request;
use App\Convert;
use File;
use App\Filepath;
use App\Events\BookHasViewed;

class BookController extends SiteController
{
    public function __construct( RecentlyViewedRepository $review_reposytory, BookRepository $b_rep, CategoryRepository $c_rep)
    {
        parent::__construct(new \App\Repositories\MenusRepository(new \App\Menu), new RecentlyViewedRepository(new \App\Book));
        $this->b_rep = $b_rep;
        $this->c_rep = $c_rep;
        $this->review_reposytory = $review_reposytory;
        $this->template = env('THEME') . '.book';
    }
    
    public function show($alias = false)
    {

        $book = $this->b_rep->getBook($alias);

        event(new BookHasViewed($book));
        
        if(empty($book)) return redirect()->back()->withErrors(Config::get('message.book_not_found'));
        
        if($booklist = $this->getBookList($book->id)){
            $book->booklist = $booklist;
        }

        $series_books = [];
        $series = '';
        if($book->category->isNotEmpty()){
            $series_id = $book->category->first()->id;
            $series = $this->c_rep->getCategory($series_id);
            $series_books = $series->book;
        }

        $formats = ['fb2', 'epub', 'mobi'];
        
        $content = view(env('THEME') . '.book_content')->with('book', $book)->with('series', $series)->with('series_books', $series_books)->render();
        $aside = view(env('THEME'). '.book_aside')->with('formats',$formats)->with('book', $book)->render();
        
        $this->vars = array_add($this->vars, 'content', $content);
        $this->vars = array_add($this->vars, 'book', $book);
        $this->vars = array_add($this->vars, 'aside', $aside);
        
        $this->review_reposytory->addView($book->id);
        
        return $this->renderOutput();
    }
    
    public function getBookList($id){
        if(!$this->isVerifiedClient()) return;
        $user = Auth::user();
        $user_favorites = DB::table('selected_books')
        ->where('book_id', '=', $id )
        ->where('user_id', '=', $user->id)
        ->first();
        return $user_favorites;
    }
    
    public function isVerifiedClient()
    {
        return auth()->user();
    }
    
    public function download(Request $request){
        $format = $request->input('format');
        $book_id = $request->input('file');
        $book = $this->b_rep->getBook($book_id);
        
        if(!$request->input('init')){
            if($book->path){
                $path = $this->b_rep->convert(public_path("/uploads/files/{$book->path->Path}"), $format);
                if(file_exists($path)){
                    return response()->json(['message'=> $path]);
                }
            }
           
            // $path_file  = $book->path->Path;
            // $request_name = str_replace($format, 'fb2.zip', $path_file);
            // if(!file_exists(public_path() .'/uploads/files/'. parse_url($request_name, PHP_URL_PATH))) return;
            // $convert = new Convert(public_path() .'/uploads/files/'. parse_url($request_name, PHP_URL_PATH), $format);
            // return response()->json(['message'=> $convert]);

        }else{
            
            if(!$book->path){
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
                        $filepath = new Filepath;
                        $filepath->Path = "{$book_id}/{$format}/" . $name;
                        $filepath->book_ID = $book_id;
                        $filepath->Format = $book->FileType;
                        $filepath->save();
                    }
                }
            }
        }
        
        
    }
    
    // public function download(Request $request){
        //     $format = $request->input('format');
        //     $path_file = $request->input('file');
        //     $request_name = str_replace($format, 'fb2.zip', $path_file);
        //     if(!file_exists(public_path() . parse_url($request_name, PHP_URL_PATH))) return;
        //     $convert = new Convert();
        //     $file = $convert->convert_format(public_path() . parse_url($request_name, PHP_URL_PATH));
        //     return response()->json(['message'=> $path_file ]);
        // }
        
    }
    