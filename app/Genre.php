<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    public $table = "genre";

    public function book(){
        return $this->belongsToMany('App\Book', 'book_genre_relship', 'genre_ID', 'book_ID')->where('Deleted', '=', 0)->limit(7);

    }
    
}
