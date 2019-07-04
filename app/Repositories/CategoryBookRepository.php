<?php

namespace App\Repositories;

use App\CategoryBook;
use App\Format;

class CategoryBookRepository extends Repository{

    public function __construct(CategoryBook $category){
        $this->model = $category;
    }
}

?>