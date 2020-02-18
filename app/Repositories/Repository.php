<?php

namespace App\Repositories;

use Config;
use DB;

abstract class Repository
{
    protected $model = false;

    public function getModel($id){
        return $this->model->where('id', $id)->first();
    }

    public function get($select = '*', $take = false, $rand = false, $pagination = false, $desc = false)
    {
        if (!$desc) {
            $builder = $this->model->select($select);
        } else {
            $builder = $this->model->select($select)->orderBy('id', 'DESC');
        }
        
        if ($take) {
            if ($rand) {
                $builder->inRandomOrder()->take($take);
            } else {
                $builder->take($take);
            }
        }
        
        if ($pagination) {
            return $builder->paginate($pagination);
        }
        return $builder->get();
    }
    
    public function findFromArrayId($arr){
        return $this->model->whereIn('id', $arr)->get();
    }

    public function getDataByField($field, $value, $paginate){
        return $this->model->where($field, $value)->paginate($paginate);
    }
    
}
