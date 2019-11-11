<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repositories\MenusRepository;
use Menu;

class SiteController extends Controller
{
    protected $template;
    protected $bar;
    protected $vars = array();
    protected $m_rep;
    protected $s_rep;
    protected $b_rep;
    protected $a_rep;
    protected $cs_rep;
    protected $c_rep;
    protected $s_search;
    protected $contentRightBar = false;
    
    public function __construct(MenusRepository $m_rep)
    {
        $this->m_rep = $m_rep;
    }
    
    protected function renderOutput()
    {
        
        $menu = $this->getMenu();
        $nav = view(env('THEME') . '.nav')->with('menu', $menu)->render();
        $this->vars = array_add($this->vars, 'nav', $nav);
        $search = '';
        $search = view(env('THEME') . '.search_content')->with('search', $search)->render();
        $this->vars = array_add($this->vars, 'search', $search);
        $books_view = session()->get('book.recently_viewed');
        if(!empty($books_view)){
            $books_view = $this->b_rep->findFromArrayId($books_view);
        };
        $books_view = view(env('THEME') . '.recently_view')->with('books_view', $books_view)->render();
        $this->vars = array_add($this->vars, 'books_view', $books_view);
        
        if ($this->contentRightBar) {
            $rightBar = view(env('THEME') . '.rightBar')->with('content_rightBar', $this->contentRightBar)->render();
            $this->vars = array_add($this->vars, 'rightBar', $rightBar);
        }
        return view($this->template)->with($this->vars);
    }
    
    protected function getMenu()
    {
        $menu = $this->m_rep->get();
        $mBuilder = Menu::make('general_menu', function ($m) use ($menu) {
            foreach ($menu as $item) {
                if ($item->parent == 0) {
                    $m->add($item->title, $item->path)->id($item->id);
                } else {
                    if ($m->find($item->parent)) {
                        $m->find($item->parent)->add($item->title, $item->path)->id($item->id);
                    }
                }
            }
        });
        return $mBuilder;
    }
    
}
