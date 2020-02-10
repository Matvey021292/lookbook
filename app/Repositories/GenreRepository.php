<?php

namespace App\Repositories;

use App\Genre;

class GenreRepository extends Repository{

    public function __construct(Genre $genre){
        $this->model = $genre;
    }

    public function getGenre($select = '*', $count = false,  $rand = false, $pagination = false , $desc = false)
    {
       return  $this->get($select, $count, $rand,  $pagination, $desc);
    }   
}

?>