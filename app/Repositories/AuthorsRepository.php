<?php

namespace App\Repositories;
use Config;
use App\Author;

class AuthorsRepository extends Repository{

    public function __construct(Author $authors){
        $this->model = $authors;
    }

    public function getAuthor(){
        $authors = $this->get('*', Config::get('settings.authors_show_count'), false, false, 'DESC');
        if ($authors->isEmpty()) {
            return false;
        }
        return $authors;
    }
}

?>