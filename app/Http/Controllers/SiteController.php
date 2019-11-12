<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repositories\MenusRepository;
use App\Repositories\RecentlyViewedRepository;
use Menu;

class SiteController extends Controller
{
    protected $template;
    protected $bar;
    protected $vars = array();
    protected $m_rep;
    protected $s_rep;
    protected $rev_rep;
    protected $book_rep;
    protected $a_rep;
    protected $cs_rep;
    protected $category_rep;
    protected $s_search;
    protected $contentRightBar = false;
    
    public function __construct(MenusRepository $m_rep, RecentlyViewedRepository $rev_rep)
    {
        $this->m_rep = $m_rep;
        $this->rev_rep = $rev_rep;
    }
    
    protected function renderOutput()
    {
        
        $menu = $this->m_rep->getMenu();
        $books_view = $this->rev_rep->getViews();

        $nav = view(env('THEME') . '.nav')->with('menu', $menu)->render();
        $books_view = view(env('THEME') . '.recently_view')->with('books_view', $books_view)->render();
        
        $this->vars = array_add($this->vars, 'nav', $nav);
        $this->vars = array_add($this->vars, 'books_view', $books_view);

        
        if ($this->contentRightBar) {
            $rightBar = view(env('THEME') . '.rightBar')->with('content_rightBar', $this->contentRightBar)->render();
            $this->vars = array_add($this->vars, 'rightBar', $rightBar);
        }
        return view($this->template)->with($this->vars);
    }
    
   
    
}
