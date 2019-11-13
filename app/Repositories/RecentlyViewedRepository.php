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

    public function addView($id){

        $book_session = $id;
        $recently_viewed = session()->get('book.recently_viewed');
        if (!isset($recently_viewed)) {
            session()->push('book.recently_viewed', $book_session);
        } else {
            $bool = false;
            foreach ($recently_viewed as $key => $recently) {
                if ($recently == $id) {
                    $bool = true;
                    break;
                }
            }
            if (!$bool) {
                session()->push('book.recently_viewed', $book_session);
            }
        }
    }
}