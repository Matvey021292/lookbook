<?php

namespace App\Http\Controllers;

use App\Repositories\AuthorsRepository;
use App\Repositories\BookContentRepository;
use App\Repositories\BookRepository;
use App\Repositories\CategoryBookRepository;
use App\Repositories\RelationshipRepository;
use Illuminate\Http\Request;

class CategoryBookController extends SiteController
{

    public function __construct(CategoryBookRepository $cs_rep, BookRepository $b_rep)
    {
        parent::__construct(new \App\Repositories\MenusRepository(new \App\Menu));
        $this->cs_rep = $cs_rep;
        $this->b_rep = $b_rep;
        $this->template = env('THEME') . '.books';
    }
    public function show($alias) {
        $category = $this->cs_rep->one($alias);
        $content = $category->getBookRelationship()->paginate(20);
        $content = view(env('THEME') . '.category')->with('content', $content)->with('category', $category)->render();
        $this->vars = array_add($this->vars, 'content', $content);
        return $this->renderOutput();
    }

    public function getBook($alias){

    }
}
