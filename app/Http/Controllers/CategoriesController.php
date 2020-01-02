<?php

namespace App\Http\Controllers;

use App\Repositories\AuthorsRepository;
use App\Repositories\BookContentRepository;
use App\Repositories\BookRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\RelationshipRepository;
use Illuminate\Http\Request;

use Config;

class CategoriesController extends SiteController
{

    public function __construct(CategoryRepository $c_rep, BookRepository $b_rep)
    {
        parent::__construct(new \App\Repositories\MenusRepository(new \App\Menu));
        $this->c_rep = $c_rep;
        $this->b_rep = $b_rep;
        $this->template = env('THEME') . '.books';
    }

    public function index(){
        $count = Config::get('settings.home_post_count');
        $categories = $this->c_rep->getCategories('*', false , false, $pagination = true, $desc = false);
        $content = view(env('THEME').'.category_book')->with('categories', $categories)->render();
        $this->vars = array_add($this->vars,'content', $content);
        return $this->renderOutput();
    }

    public function show($alias) {

        $count = Config::get('settings.home_post_count');
        
        $categories = $this->c_rep->getCategories('*', $count, true);
        $category = $this->c_rep->getCategory($alias);

        $content = $category->getBookRelationship()->paginate(20);
        $category_temp = view(env('THEME') . '.category_book')->with('categories', $categories)->render();

        $content = view(env('THEME') . '.category')->with('content', $content)->with('category', $category)->render();
        $this->vars = array_add($this->vars, 'content', $content);
        $this->vars = array_add($this->vars, 'category', $category_temp);
        return $this->renderOutput();
    }

   
}
