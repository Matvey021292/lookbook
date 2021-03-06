<?php

namespace App\Http\Controllers;

use App\Repositories\AuthorsRepository;
use App\Repositories\BookContentRepository;
use App\Repositories\BookRepository;
use App\Repositories\CategoryBookRepository;
use App\Repositories\RelationshipRepository;
use Illuminate\Http\Request;

use Config;

class CategoryBookController extends SiteController
{

    public function __construct(CategoryBookRepository $cs_rep, BookRepository $b_rep, CategoryBookRepository $c_rep)
    {
        parent::__construct(new \App\Repositories\MenusRepository(new \App\Menu));
        $this->cs_rep = $cs_rep;
        $this->b_rep = $b_rep;
        $this->c_rep = $c_rep;
        $this->template = env('THEME') . '.books';
    }
    public function show($alias) {

        $count = Config::get('settings.home_post_count');
        
        $categories = $this->c_rep->getCategories('*', $count, true);
        $category = $this->cs_rep->getCategory($alias);

        $content = $category->getBookRelationship()->paginate(20);
        $category_temp = view(env('THEME') . '.category_book')->with('categories', $categories)->render();

        $content = view(env('THEME') . '.category')->with('content', $content)->with('category', $category)->render();
        $this->vars = array_add($this->vars, 'content', $content);
        $this->vars = array_add($this->vars, 'category', $category_temp);
        return $this->renderOutput();
    }

   
}
