<?php

namespace App\Http\Controllers;

use App\Repositories\AuthorsRepository;
use App\Repositories\CategoriesRepository;
use Illuminate\Http\Request;
use App\Repositories\CategoryBookRepository;
use Menu;
use Config;

class AuthorController extends SiteController
{
    public function __construct(AuthorsRepository $a_rep, CategoriesRepository $cs_rep, CategoryBookRepository $c_rep){

        parent::__construct( new \App\Repositories\MenusRepository(new \App\Menu));
        $this->cs_rep = $cs_rep;
        $this->a_rep = $a_rep;
        $this->c_rep = $c_rep;
        $this->template = env('THEME').'.author';
    }

    public function show($alias = false){
        $count = Config::get('settings.home_post_count');
        $category = $this->c_rep->getCategories('*', $count, true);

        $author = $this->a_rep->getAuthor($alias);
        $author['link'] = str_replace('flibustahezeous3.onion', 'flibusta.is',$author['link']);
        if(empty($author)) return redirect()->back()->withErrors(Config::get('message.author_not_found'));

        $categories = $author->categories;
        $product =  $this->cs_rep->get_first_category();
        $categories->push($product);
        $categories = $this->a_rep->getCatMenu($categories);
        $books = $author->books;

        $categories = view(env('THEME').'.categories')->with('books',$books)->with('categories', $categories)->render();
        $content = view(env('THEME').'.author_content')->with('author', $author)->render();
        $category_temp = view(env('THEME') . '.category_book')->with('categories', $category)->render();

        $this->vars = array_add($this->vars,'books', $books);
        $this->vars = array_add($this->vars,'categories', $categories);
        $this->vars = array_add($this->vars,'content', $content);
        $this->vars = array_add($this->vars, 'category', $category_temp);
        
        return $this->renderOutput();
    }



   
}
