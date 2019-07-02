<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    public $table = 'ratings';

    // public function book(){
    //     return $this->belongsTo('App\Book','id','book_id');
    // }
}
