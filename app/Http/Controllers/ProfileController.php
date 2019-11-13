<?php

namespace App\Http\Controllers;

use App\BookRelationship;
use App\Repositories\AuthorsRepository;
use App\Repositories\BookRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Repositories\RecentlyViewedRepository;

class ProfileController extends SiteController
{
    public function __construct(BookRepository $b_rep, AuthorsRepository $a_rep)
    {
        parent::__construct(new \App\Repositories\MenusRepository(new \App\Menu), new RecentlyViewedRepository(new \App\Book));
        $this->b_rep = $b_rep;
        $this->a_rep = $a_rep;
        $this->template = env('THEME') . '.profile';
    }
    public function index()
    {
        
        // $books = '';
        // $content = view(env('THEME').'.profile_content')->with('books', $books)->render();
        $user = $this->getAuthUser();
        $user = view(env('THEME').'.profile_content')->with('user', $user)->render();
        // $this->vars = array_add($this->vars,'content', $content);
        $this->vars = array_add($this->vars,'user', $user);

        
        return $this->renderOutput();
    }

    public function getAuthUser ()
    {
        return Auth::user();
    }
}
