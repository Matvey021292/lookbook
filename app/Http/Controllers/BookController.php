<?php

namespace App\Http\Controllers;

use App\Repositories\AuthorsRepository;
use App\Repositories\BookRepository;
use Illuminate\Http\Request;

class BookController extends SiteController
{
    public function __construct( BookRepository $b_rep, AuthorsRepository $a_rep){
        parent::__construct( new \App\Repositories\MenusRepository(new \App\Menu));
        $this->b_rep = $b_rep;
        $this->a_rep = $a_rep;
        $this->bar = 'right';
        $this->template = env('THEME').'.books';
    }

    public function show($alias = false){
        $book = $this->b_rep->one($alias);
//        dd($book->author->get_author_desc);
        $content = view(env('THEME').'.book_content')->with('book', $book)->render();
        $this->vars = array_add($this->vars,'content', $content);
         return $this->renderOutput();
    }
}
