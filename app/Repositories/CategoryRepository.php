<?php

namespace App\Repositories;

use App\Category;
use App\Format;

class CategoryRepository extends Repository{

    public function __construct(Category $category){
        $this->model = $category;
    }

    public function getCategories($select = '*', $count = false,  $rand = false, $pagination = false , $desc = false)
    {
       return  $this->get($select, $count, $rand,  $pagination, $desc);
    }     

    public function getCategory($alias){
        return $this->model->where('id', $alias)->first();
    }
}

?>