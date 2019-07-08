<?php

namespace App\Repositories;

use App\Book;
use App\BookContent;

class BookContentRepository extends Repository{

	public function __construct(BookContent $bookContent){
		$this->model = $bookContent;
	}
}

?>