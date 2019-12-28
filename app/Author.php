<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Author extends Model
{
    public $table = "author";

    public function desc(){
        return $this->hasOne('App\AuthorDesc','author_ID','ID');
    }

    public function picture(){
        return $this->hasOne('App\AuthorPicture', 'author_ID', 'ID');
    }
    // public function book(){
    //     return $this->hasMany('App\Book','author_id','id');
    // }

    // public function books(){
    //     return $this->belongsToMany('App\Book', 'book_author_relship', 'author_ID', 'book_ID');
    // }

    // public function categories(){
    //     return $this->hasMany('App\Categories','author_id','id');
    // }

    // public function translate(){
    //     return $this->belongsToMany('App\Book', 'book_translit_relship', 'author_id', 'book_id');
    // }

}
