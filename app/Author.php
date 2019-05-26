<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Author extends Model
{
    public $table = "author";

//    public  function get_desc(){
//        return $this->belongsTo('App\AuthorDesc','id_author','id');
//    }


    public function get_author_desc(){
        return $this->hasOne('App\AuthorDesc','id_author','id');
    }
}
