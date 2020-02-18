<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use willvincent\Rateable\Rateable;
class Book extends Model
{
    use Rateable;
    
    public $table = "book";
    public $timestamps = false;
    
    public function desc()
    {
        return $this->hasOne('App\BookDesc', 'book_ID', 'id');
    }

    public function picture(){
        return $this->hasOne('App\BookPicture', 'book_ID', 'id');
    }
    
    public function rating()
    {
        return $this->hasMany('App\Rating', 'rateable_id', 'id');
    }

    public function genre(){
        return $this->belongsToMany('App\Genre', 'book_genre_relship', 'book_ID', 'genre_ID');
    }

    public function authors(){
        return $this->belongsToMany('App\Author', 'book_author_relship', 'book_ID', 'author_ID');
       
    }

    public function category(){
        return $this->belongsToMany('App\Category', 'book_category_relship', 'book_ID', 'category_ID');
    }
    
    public function translator(){
        return $this->belongsToMany('App\Author', 'book_translit_relship', 'book_ID', 'author_ID');
    }

    public function filename(){
        return $this->hasOne('App\Filename', 'book_ID');
    }

    public function path(){
        return $this->hasOne('App\Filepath', 'book_ID');
    }


    // public function author()
    // {
    //     return $this->belongsTo('App\Author', 'author_id', 'id');
    // }
    
    // public function categories()
    // {
    //     return $this->hasMany('App\Categories', 'id', 'category_id');
    // }

    // public function format()
    // {
    //     return $this->hasOne('App\Format', 'book_id', 'id');
    // }
    
    // public function getContent()
    // {
    //     return $this->hasOne('App\BookContent', 'book_id', 'id');
    // }
    
    
    
    // public function getBookRelationship()
    // {
    //     return $this->belongsToMany('App\CategoryBook', 'book_relationship', 'book_id', 'category_id');
    // }
    
   
}
