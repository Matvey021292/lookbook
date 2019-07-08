<?php

namespace App\Repositories;

use App\Book;
use App\BookRelationship;

class RelationshipRepository extends Repository{

	public function __construct(BookRelationship $relationship){
		$this->model = $relationship;
	}
}

?>