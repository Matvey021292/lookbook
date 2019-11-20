<?php

namespace App\Http\Controllers;

use Config;
use DB;
use App\Book;
use Illuminate\Support\Facades\Auth;
use App\Repositories\BookRepository;
use App\Repositories\RecentlyViewedRepository;
use Illuminate\Http\Request;
use App\Convert;


class BookController extends SiteController
{
    public function __construct( RecentlyViewedRepository $review_reposytory, BookRepository $b_rep)
    {
        parent::__construct(new \App\Repositories\MenusRepository(new \App\Menu), new RecentlyViewedRepository(new \App\Book));
        $this->b_rep = $b_rep;
        $this->review_reposytory = $review_reposytory;
        $this->template = env('THEME') . '.book';
    }
    
    public function show($alias = false, Book $product)
    {
        $book = $this->b_rep->getBook($alias);
        if(empty($book)) return redirect()->back()->withErrors(Config::get('message.book_not_found'));
        if($booklist = $this->getBookList($book->id)){
            $book->booklist = $booklist;
        }
        $authors = $book->authors;
        $content = view(env('THEME') . '.book_content')->with('book', $book)->render();
        $this->vars = array_add($this->vars, 'content', $content);
        
        
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
        $path_file = $request->input('file');
        $request_name = str_replace($format, 'fb2.zip', $path_file);
        if(!file_exists(public_path() . parse_url($request_name, PHP_URL_PATH))) return;
        $convert = new Convert();
        $file = $convert->convert_format(public_path() . parse_url($request_name, PHP_URL_PATH));
        return response()->json(['message'=> $path_file ]);
    }
    
}
