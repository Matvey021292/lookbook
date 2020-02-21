<?php

namespace App\Http\Controllers;

use App\Repositories\BookRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\BookContent;
use App\Convert;
use Config;
use App\Bookmarks;

class ContentBook extends SiteController
{
    public function __construct(Auth $user, BookRepository $b_rep)
    {
        parent::__construct(new \App\Repositories\MenusRepository(new \App\Menu));
        $this->b_rep = $b_rep;
        $this->user = $user;
        $this->template = env('THEME') . '.read';
    }   
    
    public function index($alias){
        $user = $this->user::user();
        if(!$this->user::check()){
            return redirect('/login')->with(['status' => 'Profile updated successfully.']);
        }
        $book = $this->b_rep->getModel($alias);
        if(!$book->path) return response()->json([
            'status' => 'error',
            'message' => __('Book not found')
        ]);
        // $file = $this->generate_book_slug($book);
        $file = $this->b_rep->convert(public_path("/uploads/files/{$book->path->Path}"), 'epub');
        $contents = $this->book_content($file);
        $contents = str_replace(public_path(), '', $contents);
        $bookmarks = Bookmarks::where('book_id', $book->id)->where('user_id', $user->id)->first();
        $content = view(env('THEME') . '.content_book')->with('contents', $contents)->with('book', $book)->with('bookmarks', $bookmarks)->with('user', $user)->render();
        $this->vars = array_add($this->vars, 'content', $content);
        return $this->renderOutput();
    }

    public function book_content($file){
        $content = new BookContent();
        return $content->unzip_file($file);
    }

    public function generate_book_slug($book){
        return public_path('uploads/files/' . $book->path->Path);
    }

}
