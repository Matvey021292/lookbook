<?php

namespace App\Http\Controllers;

use App\Repositories\MenusRepository;
use App\Repositories\RecentlyViewedRepository;
use Illuminate\Support\Arr;
use Config;
use Menu;


class SiteController extends Controller
{
    protected $template;
    protected $bar;
    protected $vars = array();
    protected $m_rep;
    protected $s_rep;

    protected $book_rep;
    protected $a_rep;
    protected $cs_rep;
    protected $genre_rep;
    protected $s_search;
    protected $contentRightBar = false;
    protected $review_repository = false;
    protected $pagination;
    protected $posts_count;
    protected $dir_files_path;


    public function __construct(MenusRepository $m_rep, RecentlyViewedRepository $review_repository = NULL)
    {
        $this->initConfig();
        $this->m_rep = $m_rep;
        $this->review_repository = $review_repository;
    }

    protected function initConfig(){
        $this->pagination = Config::get('settings.pagination');
        $this->posts_count = Config::get('settings.home_post_count');
//        $this->dir_files_path = Config::get('settings.dir_file_upload');

    }

    protected function renderOutput()
    {

        $menu = $this->m_rep->getMenu();
        $nav = view(env('THEME') . '.nav')->with('menu', $menu)->render();
        $this->vars = Arr::add($this->vars, 'nav', $nav);


        if($this->review_repository){
            $books_view =  $this->review_repository->getViews();
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
