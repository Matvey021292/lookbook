<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use willvincent\Rateable\Rateable;
use willvincent\Rateable\Rating;
use Illuminate\Support\Facades\Auth;

class RatingController extends Controller
{
     function postStar(Request $request, Book $post){
    	// $post = Book::first();
    	// $rating = new Rating;
    	// $rating->rating = 5;
    	// $rating->user_id = \Auth::id();
    	// $post->ratings()->save($rating);
    	// dd(Book::first()->ratings);
      $rating = new Rating;
      $rating->user_id = Auth::id();
      $rating->rating = $request->input('star');
      $post->ratings()->save($rating);
      return redirect()->back();
    }
}
