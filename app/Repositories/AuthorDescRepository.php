<?php

namespace App\Repositories;

use App\AuthorDesc;

class AuthorDescRepository extends Repository{

    public function __construct(AuthorDesc $desc){
        $this->model = $desc;
    }
}

?>