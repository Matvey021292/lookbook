<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Spatie\Searchable\Searchable;
//use Spatie\Searchable\SearchResult;

use App\BookDescription;

class Book extends Model
{
    public $table = "book";
    protected $fillable = ['name'];

    public function desc()
    {
        return $this->belongsTo('App\BookDescription', 'id', 'book_id');
    }

    public function author()
    {
        return $this->belongsTo('App\Author', 'author_id', 'id');
    }

    public function categories()
    {
        return $this->hasMany('App\Categories', 'id', 'category_id');
    }

    public function format()
    {
        return $this->hasMany('App\Format', 'book_id', 'id');
    }

    public function rating(){
        return $this->hasOne('App\Rating','book_id','id');
    }

}
