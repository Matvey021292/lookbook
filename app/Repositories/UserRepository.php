<?php

namespace App\Repositories;
use Config;
use App\User;

class UserRepository extends Repository{

	public function __construct(User $user){
		$this->model = $user;
	}



	// public function getBook($alias){
	// 	return $this->model->where('slug', $alias)->first();
	// }

}

?>