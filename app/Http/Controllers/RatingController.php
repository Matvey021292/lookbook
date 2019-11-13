<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use willvincent\Rateable\Rating;

class RatingController extends Controller
{
    public function postStar(Request $request, Book $book)
    {
        $book = Book::find($request->input('id'));
        $rating = new Rating;
        $rating->user_id = Auth::id();
        $rating->rating = $request->input('star');
        $book->ratings()->save($rating);
        echo $book->averageRating();
    }
}
