<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AuthorDesc extends Model
{
    public $table = 'author_inform';

    public function author(){
        return $this->belongsTo('App\Author', ',','id');
    }

}
