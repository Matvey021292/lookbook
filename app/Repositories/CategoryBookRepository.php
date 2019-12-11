<?php

namespace App\Repositories;

use App\CategoryBook;
use App\Format;

class CategoryBookRepository extends Repository{

    public function __construct(CategoryBook $category){
        $this->model = $category;
    }

    public function getCategories($select = '*', $count = false,  $rand = false, $pagination = false , $desc = false)
    {
       return  $this->get($select, $count, $rand,  $pagination, $desc);
    }     

    public function getCategory($alias){
        return $this->model->where('slug', $alias)->first();
    }
}

?>