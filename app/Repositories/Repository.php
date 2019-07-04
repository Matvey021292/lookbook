<?php

namespace App\Repositories;

use Config;

abstract class Repository {

	protected $model = false;

	public function getMaxLimit(){
        $builder = $this->model->select();
        return $builder->get();
    }
	public function get($select = '*', $take = false, $rand = false, $pagination = false , $desc = false){

	    if(!$desc){
            $builder = $this->model->select($select);
	    }else{
            $builder = $this->model->select($select)->orderBy('id', 'DESC');
        }
		if($take){
            if($rand){
                $builder->inRandomOrder()->take($take);
            }else{
                $builder->take($take);
            }
		}

		if($pagination){
		    return $builder->paginate(Config::get('settings.pagination'));
        }
		return $builder->get();
	}

	public function one($alias){
	   return  $this->model->where('slug', $alias)->first();
    }


}

?>