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
        if(!$this->user::id()) return __('User not found <a href="/register"> Register </a> || <a href="/login"> Login </a>');
        $book->user_id =  $this->user::id();
        $book->save();
        return sprintf("Book add to dashboard <a href=\"%s\"> Profile </a>", route('profile.show', ['alias'=> $book->user_id]));
    }
    
    public function removeBook($book_id){
        $this->model->where('book_id', '=', $book_id )->where('user_id', '=',  $this->user::id())->first()->delete();
    }
}

?>