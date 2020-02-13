<?php

namespace App\Http\Controllers;

use App\Repositories\AuthorsRepository;
use App\Repositories\BookContentRepository;
use App\Repositories\BookRepository;
use App\Repositories\GenreRepository;
use App\Repositories\RelationshipRepository;
use Illuminate\Http\Request;

use Config;

class GenreController extends SiteController
{
    public function __construct(GenreRepository $c_rep, BookRepository $b_rep)
    {
        parent::__construct(new \App\Repositories\MenusRepository(new \App\Menu));
        $this->c_rep = $c_rep;
        $this->b_rep = $b_rep;
        $this->template = env('THEME') . '.books';
    }

    public function index(){
        $count = Config::get('settings.home_post_count');
        $categories = $this->c_rep->getGenres('*', false , false, $pagination = true, $desc = false);
        $content = view(env('THEME').'.genres_book')->with('categories', $categories)->render();
        $this->vars = array_add($this->vars,'content', $content);
        return $this->renderOutput();
    }

    public function show($alias){
        $count = Config::get('settings.pagination');
        $category = $this->c_rep->getGenre($alias);
        $books = $category->book()->paginate($count);
        $content = view(env('THEME').'.genre_book')->with('category', $category)->with('books', $books)->render();
        $this->vars = array_add($this->vars,'content', $content);
        return $this->renderOutput();
    }
}
