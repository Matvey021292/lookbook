<?php

namespace App\Http\Controllers;

use App\Repositories\AuthorsRepository;
use Illuminate\Http\Request;
use Config;

class AuthorsController extends SiteController
{
    public function __construct(AuthorsRepository $a_rep){
        parent::__construct( new \App\Repositories\MenusRepository(new \App\Menu));
        $this->a_rep = $a_rep;
        $this->template = env('THEME').'.authors';
    }

    public function index(){
        $count = Config::get('settings.pagination');
        $authors = $this->a_rep->getAuthors('*', false, false, $count ,true);

        $content = view(env('THEME').'.authors_content')->with('authors', $authors)->render();
        
        $this->vars = array_add($this->vars,'content', $content);

        return $this->renderOutput();
    }
}
