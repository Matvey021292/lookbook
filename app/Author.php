<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Author extends Model
{
    public $table = "author";

    public function desc(){
        return $this->hasOne('App\AuthorDesc','author_ID','id');
    }

    public function picture(){
        return $this->hasOne('App\AuthorPicture', 'author_ID', 'id');
    }

    public function books(){
        return $this->belongsToMany('App\Book', 'book_author_relship', 'author_ID', 'book_ID')->where('Deleted', '=', 0);
    }

    public function categories(){
        return $this->belongsToMany('App\Category', 'author_category_relship', 'author_ID', 'category_ID');
    }

    public function genre(){
        return $this->belongsToMany('App\Genre', 'author_genre_relship', 'author_ID', 'genre_ID');
    }
}
