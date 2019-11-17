<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookList extends Model
{
    public $table = 'selected_books';


    public function book(){
        return $this->hasOne('App\Book', 'id', 'book_id');
    }
}

