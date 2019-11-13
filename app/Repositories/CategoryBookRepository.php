<?php

namespace App\Repositories;

use App\CategoryBook;
use App\Format;

class CategoryBookRepository extends Repository{

    public function __construct(CategoryBook $category){
        $this->model = $category;
    }

    public function getCategories()
    {
       return $this->model->select()->get();
    }     

    public function getCategory($alias){
        return $this->model->where('slug', $alias)->first();
    }
}

?>