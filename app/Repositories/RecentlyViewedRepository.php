<?php

namespace App\Repositories;
use App\Book;

class RecentlyViewedRepository extends Repository{
    
    
    public function __construct(Book $book){
        $this->model = $book;
    }
    
    public function getViews(){
        $books_view = session()->get('book.recently_viewed');
        if(!empty($books_view)){
            $books_view = $this->findFromArrayId($books_view);
        };
        return $books_view;
    }
}