<?php

namespace App\Http\Controllers;

use App\Repositories\BookRepository;
use App\Repositories\GenreRepository;


class GenreController extends SiteController
{
    public function __construct(GenreRepository $genre_rep, BookRepository $book_rep)
    {
        parent::__construct(new \App\Repositories\MenusRepository(new \App\Menu));
        $this->genre_rep = $genre_rep;
        $this->book_rep = $book_rep;
        $this->template = env('THEME') . '.genres';
    }

    public function index(){
        $count = $this->posts_count;
        $categories = $this->genre_rep->getGenres('*', false , false, $count, $desc = false);
        $content = view(env('THEME').'.genres_content')->with('categories', $categories)->render();
        $this->vars = array_add($this->vars,'content', $content);
        return $this->renderOutput();
    }

    public function show($alias){
        $this->template = env('THEME') . '.genre';
        $count = $this->pagination;
        $genre = $this->genre_rep->getGenre($alias);
        $books = $genre->book()->paginate($count);
        $content = view(env('THEME').'.genre_content')->with('genre', $genre)->with('books', $books)->render();
        $this->vars = array_add($this->vars,'content', $content);
        $this->vars = array_add($this->vars,'genre', $genre);
        return $this->renderOutput();
    }
}
