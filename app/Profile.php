<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public $table = 'users';

    public function getBookId(){
        return $this->belongsTo('App\BookRelationship', 'id', 'book_id');
    }

    public function getEmail(){
        
    }
}
