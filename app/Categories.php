<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    public $table = "category";

    public function author(){
        return $this->belongsTo('App\Author','author_id','id');
    }
    public function book(){
        return $this->belongsToMany('App\Book','category_id','id');
    }
}
