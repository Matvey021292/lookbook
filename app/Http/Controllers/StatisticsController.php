<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StatisticsController extends Controller
{

    public function statistics(Request $request){
        dump($request);
        $response_format = $request->input('format') ? $request->input('format') : 'json';
        dump($response_format);
    }

    public function bookmarks(Request $request){
        dd($request->input());
    }
}
