<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Bookmarks;

class StatisticsController extends SiteController
{
    
    
    public function statistics(Request $request){
        $response_format = $request->input('format') ? $request->input('format') : 'json';
        dump($response_format);
    }
    
    public function bookmarks(Request $request){
        dump($request->user('api'));
        dump(auth('api')->user());
        $bookmarks =  Bookmarks::create($request->all());
        dd($bookmarks);
    }
}
