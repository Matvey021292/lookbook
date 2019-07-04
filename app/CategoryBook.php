<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryBook extends Model
{
    public $table = 'category_book';

    public function getBookRelationship(){
        return $this->hasMany('App\BookRelationship','category_id', 'id');
    }
}
