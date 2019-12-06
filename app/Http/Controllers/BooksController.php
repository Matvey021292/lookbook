<?php

namespace App\Http\Controllers;

use App\Repositories\BookRepository;
use App\Repositories\RecentlyViewedRepository;
use Illuminate\Http\Request;



class BooksController extends SiteController
{

    public function __construct( BookRepository $b_rep){
        parent::__construct( new \App\Repositories\MenusRepository(new \App\Menu));
        $this->b_rep = $b_rep;
        $this->template = env('THEME').'.books';
       

    }

    public function index()
    {
        $books = $this->b_rep->getBooks('*', false , false, $pagination = true, $desc = true);
        $content = view(env('THEME').'.books_content')->with('books', $books)->render();
        $this->vars = array_add($this->vars,'content', $content);
        return $this->renderOutput();
    }

}
