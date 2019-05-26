<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\MenusRepository;
use App\Http\Controllers\Controller;

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
    protected $contentRightBar = false;


    public function __construct(MenusRepository $m_rep){
        $this->m_rep = $m_rep;
    }

    protected function renderOutput(){
        
        $menu = $this->getMenu();

    	$nav = view(env('THEME').'.nav')->with('menu', $menu)->render();
    	$this->vars = array_add($this->vars,'nav', $nav);

    	if($this->contentRightBar){
    	    $rightBar = view(env('THEME') . '.rightBar')->with('content_rightBar', $this->contentRightBar)->render();
    	    $this->vars = array_add($this->vars,'rightBar', $rightBar);
        }
    	return view($this->template)->with($this->vars);

    }

    protected function getMenu(){
        $menu = $this->m_rep->get();
        $mBuilder = Menu::make('general_menu', function($m) use ($menu){
            foreach($menu as $item){
                if($item->parent == 0){
                    $m->add($item->title,$item->path)->id($item->id);
                }else{
                    if ($m->find($item->parent)) {
                        $m->find($item->parent)->add($item->title,$item->path)->id($item->id);
                    }
                }
            }
        });
        return $mBuilder;
    }
}
