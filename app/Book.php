<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use willvincent\Rateable\Rateable;

class Book extends Model
{
    use Rateable;

    public $table = "book";
//    protected $fillable = ['name'];

    public function desc()
    {
        return $this->belongsTo('App\BookDescription', 'id', 'book_id');
    }

    public function rating()
    {
        return $this->hasMany('App\Rating', 'rateable_id', 'id');
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
        return $this->hasOne('App\Format', 'book_id', 'id');
    }

    public function getContent()
    {
        return $this->hasOne('App\BookContent', 'book_id', 'id');
    }

    public function translator(){
        return $this->belongsToMany('App\Author', 'book_translit_relship', 'book_id', 'author_id');
    }

    public function getBookRelationship()
    {
        return $this->belongsToMany('App\CategoryBook', 'book_relationship', 'book_id', 'category_id');
    }

    public function authors(){
        return $this->belongsToMany('App\Author', 'book_author_relship', 'book_id', 'author_id');
    }
}
