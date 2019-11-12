<?php

namespace App\Repositories;
use Config;
use App\Book;

class BookRepository extends Repository{

	public function __construct(Book $books){
		$this->model = $books;
	}

	public function getBooks($rand = false){
		$books = $this->get('*', Config::get('settings.home_port_count'), $rand);
        if ($books->isEmpty()) {
            return false;
		}
        return $books;
	}
}

?>