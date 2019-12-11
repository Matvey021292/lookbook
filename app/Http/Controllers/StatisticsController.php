<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bookmarks;
use App\Marker;
use Illuminate\Support\Facades\Auth;

class StatisticsController extends SiteController
{
    
    public function Statistics(Request $request){
        
    }
    
    public function AutoBookmarks(Request $request){
        $user = $request->user()->id;
        $book = (int) $request->input('book');
        $requests = $request->all();
        $requests['user_id'] = $user;
        $requests['book_id'] = $book;

        $bookmarks = $this->find_bookmarks($book, $user);

        if(!$bookmarks){
            Bookmarks::create($requests)->save();
        }else{
            $bookmarks->update($requests);
        }

        return response()->json($request);
    }

    public function find_bookmarks($book, $user){
        return Bookmarks::where('book_id', $book)->where('user_id', $user)->first();
    }

    public function Bookmarks(Request $request){
        $user = $request->user()->id;
        $book = (int) $request->input('book');
        $requests = $request->all();
        $requests['user_id'] = $user;
        $requests['book_id'] = $book;

        $bookmarks = Marker::where('book_id', $book)->where('user_id', $user)->where('first_line', $request->input('first_line'))->first();

        if(!$bookmarks){
            $marker = Marker::create($requests);
            $marker->save();
        }else{
            $bookmarks->delete();
        }

        return response()->json($request);
    }
    
}