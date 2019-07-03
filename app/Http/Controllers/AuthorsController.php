<?php

namespace App\Http\Controllers;

use App\Repositories\AuthorsRepository;
use App\Repositories\BookRepository;
use Illuminate\Http\Request;
use Config;

class AuthorsController extends SiteController
{
    public function __construct( BookRepository $b_rep, AuthorsRepository $a_rep){
        parent::__construct( new \App\Repositories\MenusRepository(new \App\Menu));
        $this->b_rep = $b_rep;
        $this->a_rep = $a_rep;
        $this->bar = 'right';
        $this->template = env('THEME').'.authors';
    }

    public function index(){
        $authors = $this->getAuthor();
        $authors->transform(function($item, $key){
            $item->desc->image =  Config::get('settings.image_url') . $item->desc->image;
            return $item;

        });

        $content = view(env('THEME').'.authors_content')->with('authors', $authors)->render();
        $this->vars = array_add($this->vars,'content', $content);

        return $this->renderOutput();
    }

    public function getAuthor(){
        $authors = $this->a_rep->get('*', false, false, true,true);

        if($authors->isEmpty()){
            return false;
        }
        return $authors;
    }
}
