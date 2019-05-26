<?php

namespace App\Repositories;

use App\Author;

class AuthorsRepository extends Repository{

    public function __construct(Author $authors){
        $this->model = $authors;
    }
}

?>