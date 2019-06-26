<?php

namespace App\Http\Controllers;

use App\Repositories\AuthorsRepository;
use App\Repositories\BookRepository;
use Illuminate\Http\Request;

use Config;


class BooksController extends SiteController
{

    public function __construct( BookRepository $b_rep, AuthorsRepository $a_rep){
        parent::__construct( new \App\Repositories\MenusRepository(new \App\Menu));
        $this->b_rep = $b_rep;
        $this->a_rep = $a_rep;
        $this->bar = 'right';
        $this->template = env('THEME').'.books';

    }

    public function index()
    {
        $books = $this->getBooks();
        $content = view(env('THEME').'.books_content')->with('books', $books)->render();
        $this->vars = array_add($this->vars,'content', $content);
        return $this->renderOutput();
    }

    public function getBooks($alias = false){
        $books = $this->b_rep->get('*', false, false, true,true);
        if($books->isEmpty()){
            return false;
        }
        $books->transform(function($item, $key){
            $item->desc->book_img = env('THEME') . $item->desc->book_img;
            $item->desc->book_desc = str_limit(strip_tags($item->desc->book_desc), $limit = 100, $end = '...');

            return $item;
        });
        return $books;
    }

    public function getAuthor(){
        $authors = $this->a_rep->get('*', Config::get('settings.authors_show_count'));
        if($authors->isEmpty()){
            return false;
        }
        return $authors;
    }

    public function getRating(){
        echo 1;
    }



}
