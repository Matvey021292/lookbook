<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Book;
use willvincent\Rateable\Rating;
use Illuminate\Support\Facades\Auth;

class RatingController extends Controller
{
    function postStar(Request $request, Book $book){
        // $post = Book::first();
        // $rating = new Rating;
        // $rating->rating = 5;
        // $rating->user_id = \Auth::id();
        // $post->ratings()->save($rating);
//        $book = Book::find($request->input('id'));
        $rating = new Rating;
        $rating->user_id = Auth::id();
        $rating->rating = $request->input('star');
        $book->ratings()->save($rating);
        return redirect()->back();
    }
}