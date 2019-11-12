<?php

namespace App\Repositories;

use Config;

abstract class Repository
{
    
    protected $model = false;
    
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
            return $builder->paginate(Config::get('settings.pagination'));
        }
        return $builder->get();
    }
    
    public function getBookByTitle($select = '*', $query)
    {
        $builder = $this->model->select($select)->orderBy('id', 'DESC');
        return $builder->where('book', 'LIKE', '%' . $query . "%")->get();
    }
    
    public function getAuthorByTitle($select = '*', $query)
    {
        $builder = $this->model->select($select)->orderBy('id', 'DESC');
        return $builder->where('title', 'LIKE', '%' . $query . "%")->get();
    }
    
    public function one($alias)
    {
        return $this->model->where('slug', $alias)->first();
    }
    
    public function find_from_id($id)
    {
        return $this->model->where('id', $id)->first();
    }
    
    public function findFromArrayId($arr){
        return $this->model->whereIn('id', $arr)->get();
    }
    
    // public function transformUrl($arr){
    //     $books->transform(function ($item, $key) {
    //         $item->desc->book_img = str_replace(Config::get('settings.replace_url'), Config::get('settings.path_image'), $item->desc->book_img);
    //         $item->desc->book_desc = str_limit(strip_tags($item->desc->book_desc), $limit = 100, $end = '...');
    //         return $item;
    //     });
    // }
    
}
