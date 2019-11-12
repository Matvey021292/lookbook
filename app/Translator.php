<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Translator extends Model
{
    public $table = 'book_translit_relship';

    public function book(){
        return $this->hasMany('App\Book','author_id','id');
    }

    public function author(){
        return $this->hasMany('App\Author','author_id','id');
    }
}
