<?php

namespace App\Repositories;
use Config;
use App\Profile;

class ProfileRepository extends Repository{

	public function __construct(Profile $profile){
		$this->model = $profile;
	}



	// public function getBook($alias){
	// 	return $this->model->where('slug', $alias)->first();
	// }

}

?>