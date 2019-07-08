<?php

namespace App\Http\Controllers;

use App\Repositories\AuthorsRepository;
use App\Repositories\BookContentRepository;
use App\Repositories\BookRepository;
use Illuminate\Http\Request;

class ContentBook extends SiteController
{
    public function __construct(BookRepository $b_rep, AuthorsRepository $a_rep, BookContentRepository $cb_rep)
    {
        parent::__construct(new \App\Repositories\MenusRepository(new \App\Menu));
        $this->b_rep = $b_rep;
        $this->a_rep = $a_rep;
        $this->cb_rep = $cb_rep;
        $this->bar = 'right';
        $this->template = env('THEME') . '.books';
    }
    public function show($id){
        $content = $this->cb_rep->find_from_id($id);
        $content = view(env('THEME') . '.content_book')->with('content', $content)->render();
        $this->vars = array_add($this->vars, 'content', $content);
        return $this->renderOutput();
    }
}
