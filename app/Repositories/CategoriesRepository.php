<?php

namespace App\Repositories;

use App\Categories;

class CategoriesRepository extends Repository{

    public function __construct(Categories $categories){
        $this->model = $categories;
    }
}

?>