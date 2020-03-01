<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\BookRepository;
use App\Repositories\GenreRepository;
use Config;


class AjaxController extends SiteController
{
    public function __construct( BookRepository $b_rep, GenreRepository $g_rep ){
        parent::__construct( new \App\Repositories\MenusRepository(new \App\Menu));
        $this->b_rep = $b_rep;
        $this->g_rep = $g_rep;

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

    public function genre(Request $request){
        $alias = $request->input('alias');
        $count = Config::get('settings.pagination');
        $books = $this->g_rep->getGenre($alias)->book()->paginate($count);
        $content = view(env('THEME').'.ajax_book')->with('books', $books)->render();
        return response()->json([ 
            'status' => 'success',
            'message' => $content
         ]);
        
    }
}
