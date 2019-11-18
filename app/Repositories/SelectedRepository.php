<?php

namespace App\Repositories;

use App\SelectedBook;
use Illuminate\Support\Facades\Auth;

class SelectedRepository extends Repository{
    
    public function __construct(SelectedBook $selected, Auth $user){
        $this->model = $selected;
        $this->user = $user;
    }
    
    public function findSelectedBook($book_id){
        return $this->model
        ->where('book_id', '=', $book_id )
        ->where('user_id', '=', $this->user::id())
        ->first();
    }
    
    public function addBook($book_id){
        $book = new $this->model;
        $book->stage = 1;
        $book->last_page = 0;
        $book->book_id = $book_id;
        $book->user_id =  $this->user::id();
        $book->save();
    }
    
    public function removeBook($book_id){
        $this->model->where('book_id', '=', $book_id )->where('user_id', '=',  $this->user::id())->first()->delete();
    }
}

?>