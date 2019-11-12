<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryBook extends Model
{
    public $table = 'category_book';

    public function getBookRelationship()
    {
        return $this->belongsToMany('App\Book', 'book_relationship', 'category_id', 'book_id');
    }

    public function getCategory(){
        echo 1;
    }

}
