<?php

namespace App\Repositories;

use App\Bookmarks;

class BookmarksRepository extends Repository{

	public function __construct(Bookmarks $bookmarks){
		$this->model = $bookmarks;
    }
    
   
}

?>