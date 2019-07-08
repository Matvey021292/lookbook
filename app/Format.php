<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Format extends Model
{
    public $table = "book_format";

    public function book(){
        return $this->belongsTo('App\Book','id','book_id');
    }
    public function slider(){
        return $this->belongsTo('App\Book','id','book_id');
    }
    public function getContent(){
        return $this->hasOne('App\BookContent', 'format_id', 'id');
    }
}
