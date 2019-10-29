<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookRelationship extends Model
{
    public $table = "book_relationship";
    public $timestamps = false;

    public function getBookCategory()
    {
        return $this->belongsToMany('App\CategoryBook', 'book', 'id', 'id', 'id', 'id');
    }
}
