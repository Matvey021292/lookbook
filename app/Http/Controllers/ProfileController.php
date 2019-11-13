<?php

namespace App\Http\Controllers;

use App\BookRelationship;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Repositories\RecentlyViewedRepository;

class ProfileController extends SiteController
{
    public function __construct()
    {
        parent::__construct(new \App\Repositories\MenusRepository(new \App\Menu), new RecentlyViewedRepository(new \App\Book));
        $this->template = env('THEME') . '.profile';
    }
    public function index()
    {
        
        $user = $this->getAuthUser();
        $user = view(env('THEME').'.profile_content')->with('user', $user)->render();
        $this->vars = array_add($this->vars,'user', $user);
         return $this->renderOutput();
    }

    public function getAuthUser ()
    {
        return Auth::user();
    }
}
