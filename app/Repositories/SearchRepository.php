<?php

namespace App\Repositories;

use App\Search;

class SearchRepository extends Repository{

    public function __construct(Search $query){
        $this->model = $query;
    }
}

?>