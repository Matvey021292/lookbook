<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Author extends Model
{
    public $table = "author";

    public function desc(){
        return $this->hasOne('App\AuthorDesc','id_author','id');
    }

    public function book(){
        return $this->hasMany('App\Book','author_id','id');
    }

    public function categories(){
        return $this->hasMany('App\Categories','author_id','id');
    }

}
