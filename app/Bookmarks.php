<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookmarks extends Model
{
    public $table = 'bookmarks';
    public $timestamps = false;
    protected $fillable = ['book','device_name', 'offset', 'part', 'time', 'xpath', 'book_id', 'user_id'];
}
