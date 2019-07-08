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

    public function __construct(BookRepository $b_rep, AuthorsRepository $a_rep, CategoryBookRepository $cs_rep, RelationshipRepository $cr_rep)
    {
        parent::__construct(new \App\Repositories\MenusRepository(new \App\Menu));
        $this->b_rep = $b_rep;
        $this->a_rep = $a_rep;
        $this->cs_rep = $cs_rep;
        $this->cr_rep = $cr_rep;
        $this->bar = 'right';
        $this->template = env('THEME') . '.books';
    }
    public function show($alias) {
        $content = $this->cs_rep->one($alias);
        $content = $content->getBookRelationship()->paginate(20);
        $content = view(env('THEME') . '.category')->with('content', $content)->render();
        $this->vars = array_add($this->vars, 'content', $content);
        return $this->renderOutput();
    }

    public function getBook($alias){

    }
}
