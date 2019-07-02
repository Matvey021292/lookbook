<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use willvincent\Rateable\Rateable;
use App\Rating;


class Book extends Model
{
    use Rateable;

    public $table = "book";
    protected $fillable = ['name'];

    public function desc()
    {
        return $this->belongsTo('App\BookDescription', 'id', 'book_id');
    }

    public function rating()
    {
        return $this->hasMany('App\Rating','rateable_id','id');
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


}
