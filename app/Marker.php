<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marker extends Model
{
    public $table = 'marker';
    protected $fillable = ['book','first_line', 'offset', 'part', 'title', 'xpath', 'book_id', 'user_id'];
    public $timestamps = false;
}
