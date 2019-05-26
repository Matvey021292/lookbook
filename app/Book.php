<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\BookDescription;

class Book extends Model
{
	 public $table = "book";

    public function desc(){
        return $this->belongsTo('App\BookDescription','id','book_id');
    }
    public function author(){
        return $this->belongsTo('App\Author','author_id','id');
    }
}
