<?php

namespace App\Repositories;
use Config;
use App\Book;

class BookRepository extends Repository{

	public function __construct(Book $books){
		$this->model = $books;
	}

	public function getBooks($select = '*', $count = false,  $rand = false, $pagination = false , $desc = false){
	if (!$desc) {
            $builder = $this->model->select($select);
        } else {
            $builder = $this->model->select($select)->orderBy('id', 'DESC');
		}

		$builder = $this->model->select($select)->where('Deleted', '=', 0);
		
		if ($count) {
            if ($rand) {
                $builder->inRandomOrder()->take($count);
            } else {
                $builder->take($count);
            }
        }
        
        if ($pagination) {
            return $builder->paginate(Config::get('settings.pagination'));
        }
        return $builder->get();
    }

	public function getBook($alias){
		return $this->model->where('id', $alias)->first();
	}
	
}

?>