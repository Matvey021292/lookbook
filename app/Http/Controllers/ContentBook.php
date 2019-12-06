<?php

namespace App\Http\Controllers;

use App\Repositories\BookRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\BookContent;
use App\Convert;
use Config;

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
        $book = $this->b_rep->getBook($alias);
        $file = $this->generate_book_slug($book);
        $contents = $this->book_content($file);
        $contents = str_replace(public_path(), '', $contents);
        $content = view(env('THEME') . '.content_book')->with('contents', $contents)->with('book', $book)->with('user', $user)->render();
        $this->vars = array_add($this->vars, 'content', $content);
        return $this->renderOutput();
    }

    public function book_content($path){
        $format = 'epub';
        $request_name = str_replace($format, 'fb2.zip', $path);
        if(!file_exists(public_path() . parse_url($request_name, PHP_URL_PATH))) return;
        $convert = new Convert();
        $file = $convert->convert_format(public_path() . parse_url($request_name, PHP_URL_PATH), $format);
        $content = new BookContent();
        return $content->unzip_file($file);
    }

    public function generate_book_slug($book){
        return '/uploads/file/' . $book->format->link . '/' . $book->format->slug;
    }

}
