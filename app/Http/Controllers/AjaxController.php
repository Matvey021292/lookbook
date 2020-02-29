<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\BookRepository;
use Config;


class AjaxController extends SiteController
{
    public function __construct( BookRepository $b_rep){
        parent::__construct( new \App\Repositories\MenusRepository(new \App\Menu));
        $this->b_rep = $b_rep;

    }

    public function books(Request $request){
        $count = Config::get('settings.home_post_count');
        $books = $this->b_rep->getBooks('*', false , false, $count, $desc = true);
        $content = view(env('THEME').'.ajax_book')->with('books', $books)->render();
        return response()->json([ 
            'status' => 'success',
            'message' => $content
         ]);
        
    }
}
