<?php

namespace App\Repositories;

use App\Genre;

class GenreRepository extends Repository{

    public function __construct(Genre $genre){
        $this->model = $genre;
    }

    // function get_first_category(){
    //     return $this->model->find(1);
    // }
}

?>