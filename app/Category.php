<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $table = 'category';

    public function books(){
        return $this->belongsToMany('App\Book', 'book_category_relship', 'category_ID', 'book_ID')->where('Deleted', '=', 0)->limit(7);
    }

    // public function getBookRelationship(){
    //     return $this->belongsToMany('App\Book', 'book_category_relship', 'category_ID', 'book_ID')->where('Deleted', '=', 0);
    // }
}
