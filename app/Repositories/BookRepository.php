<?php

namespace App\Repositories;
use Config;
use App\Book;

class BookRepository extends Repository{

	public function __construct(Book $books){
		$this->model = $books;
	}

	public function getBooks($select = '*', $count = false,  $rand = false, $pagination = false , $desc = false){
		$books = $this->get($select, $count, $rand,  $pagination, $desc);
        if ($books->isEmpty()) {
            return false;
		}
        return $books;
	}

	public function getBook($alias){
		return $this->model->where('slug', $alias)->first();
	}

}

?>