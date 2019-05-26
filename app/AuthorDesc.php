<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AuthorDesc extends Model
{
    public $table = 'author_inform';

    public function get_author_desc(){
        return $this->belongsTo('App\Author','id_author','id');
    }
}
