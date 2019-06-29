<?php

namespace App\Repositories;

use App\Format;

class FormatRepository extends Repository{

	public function __construct(Format $format){
		$this->model = $format;
	}
}

?>