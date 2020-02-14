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
        $this->template = env('THEME') . '.genres';
    }

    public function index(){
        $count = Config::get('settings.home_post_count');
        $categories = $this->c_rep->getGenres('*', false , false, $count, $desc = false);
        $content = view(env('THEME').'.genres_content')->with('categories', $categories)->render();
        $this->vars = array_add($this->vars,'content', $content);
        return $this->renderOutput();
    }

    public function show($alias){
        $this->template = env('THEME') . '.genre';
        $count = Config::get('settings.pagination');
        $genre = $this->c_rep->getGenre($alias);
        $books = $genre->book()->paginate($count);
        $content = view(env('THEME').'.genre_content')->with('genre', $genre)->with('books', $books)->render();
        $this->vars = array_add($this->vars,'content', $content);
        $this->vars = array_add($this->vars,'genre', $genre);
        return $this->renderOutput();
    }
}
