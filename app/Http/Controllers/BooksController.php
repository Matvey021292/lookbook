<?php

namespace App\Http\Controllers;

use App\Repositories\BookRepository;
use App\Repositories\RecentlyViewedRepository;
use App\Repositories\CategoryRepository;
use Illuminate\Http\Request;

use Config;

class BooksController extends SiteController
{

    public function __construct( BookRepository $b_rep, CategoryRepository $c_rep){
        parent::__construct( new \App\Repositories\MenusRepository(new \App\Menu));
        $this->b_rep = $b_rep;
        $this->c_rep = $c_rep;
        $this->template = env('THEME').'.books';
       

    }

    public function index()
    {

        $count = Config::get('settings.home_post_count');
        
        $books = $this->b_rep->getBooks('*', false , false, $pagination = true, $desc = true);
        $content = view(env('THEME').'.books_content')->with('books', $books)->render();

        $this->vars = array_add($this->vars,'content', $content);
        return $this->renderOutput();
    }

    public function show($requset){
        $count = Config::get('settings.pagination');

        $books = $this->b_rep->getBooks('*', false , false, $pagination = true, $desc = true);
        $content = view(env('THEME').'.books_content')->with('books', $books)->render();

        $this->vars = array_add($this->vars,'content', $content);
        return $this->renderOutput();
    }

    public function download(){
        echo 1;
    }

}
