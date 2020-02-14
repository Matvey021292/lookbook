<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repositories\MenusRepository;
use App\Repositories\RecentlyViewedRepository;
use Menu;
use Config;

class SiteController extends Controller
{
    protected $template;
    protected $bar;
    protected $vars = array();
    protected $m_rep;
    protected $s_rep;
    protected $review_reposytory;
    protected $book_rep;
    protected $a_rep;
    protected $cs_rep;
    protected $category_rep;
    protected $s_search;
    protected $contentRightBar = false;
    
    
    public function __construct(MenusRepository $m_rep, RecentlyViewedRepository $review_reposytory = NULL)
    {
        $this->m_rep = $m_rep;
        $this->review_reposytory = $review_reposytory;
    }
    
    protected function renderOutput()
    {
        
        $menu = $this->m_rep->getMenu();
        $nav = view(env('THEME') . '.nav')->with('menu', $menu)->render();
        $this->vars = array_add($this->vars, 'nav', $nav);
        

        if($this->review_reposytory){
            $books_view =  $this->review_reposytory->getViews();
            $books_view = view(env('THEME') . '.recently_view')->with('books_view', $books_view)->render();
            $this->vars = array_add($this->vars, 'books_view', $books_view);
        }
        
        if ($this->contentRightBar) {
            $rightBar = view(env('THEME') . '.rightBar')->with('content_rightBar', $this->contentRightBar)->render();
            $this->vars = array_add($this->vars, 'rightBar', $rightBar);
        }
        return view($this->template)->with($this->vars);
    }
    
    public function errorRedirect($contents, $message){
        if(empty($contents)) return redirect()->back()->withErrors(Config::get($message));
    }
    
}
