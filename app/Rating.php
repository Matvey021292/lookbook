<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Book;

class Rating extends Model
{
    public $table = 'ratings';


    public function user()
    {
        return $this->belongsToMany(User::class);
    }


    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
