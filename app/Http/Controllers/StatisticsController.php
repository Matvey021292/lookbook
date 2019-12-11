<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bookmarks;
use Illuminate\Support\Facades\Auth;

class StatisticsController extends SiteController
{
    
    public function statistics(Request $request){
        
    }
    
    public function bookmarks(Request $request){
        $requests = $request->all();
        $requests['user_id'] = Auth::user()->id;
        $requests['book_id'] = (int) $request->input('book');
        $bookmarks = Bookmarks::where('book_id', $requests['book_id'])->where('user_id', Auth::user()->id)->first();
        if(!$bookmarks){
            Bookmarks::create($requests)->save();
        }else{
            $bookmarks->update($requests);
        }
        if(!$bookmarks) return;
        return response()->json($request);
    }
    
}