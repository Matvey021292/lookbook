<?php

namespace App\Http\Controllers;

use App\Repositories\AuthorsRepository;
use App\Repositories\CategoriesRepository;
use Illuminate\Http\Request;
use Menu;

class AuthorController extends SiteController
{
    public function __construct(AuthorsRepository $a_rep, CategoriesRepository $cs_rep){

        parent::__construct( new \App\Repositories\MenusRepository(new \App\Menu));
        $this->cs_rep = $cs_rep;
        $this->a_rep = $a_rep;
        $this->template = env('THEME').'.author';
    }

    public function show($alias = false){
        $author = $this->a_rep->getAuthor($alias);
        $categories = $author->categories;
        $categories = $this->a_rep->getCatMenu($categories);
        $books = $author->book;
        
        $categories = view(env('THEME').'.categories')->with('books',$books)->with('categories', $categories)->render();
        $content = view(env('THEME').'.author_content')->with('author', $author)->render();

        $this->vars = array_add($this->vars,'books', $books);
        $this->vars = array_add($this->vars,'categories', $categories);
        $this->vars = array_add($this->vars,'content', $content);
        
        return $this->renderOutput();
    }



   
}
