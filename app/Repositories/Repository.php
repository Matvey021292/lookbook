<?php

namespace App\Repositories;

use Config;
use DB;

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
            return $builder->paginate($pagination);
        }
        return $builder->get();
    }
    
    
    public function getBookByTitle($query, $count){
        return $this->model
        ->join('book_inform', 'book.id', '=', 'book_inform.book_ID')
        ->where('book_inform.Title', 'LIKE', '%' . $query . "%")
        ->where('Deleted', '=', 0)
        ->limit($count)
        ->get();
    }
    
    
    function getAuthorByTitle($query, $count){
        return $this->model
        ->where('FirstName', 'LIKE', '%' . $query . "%")
        ->orWhere('LastName', 'LIKE', '%' . $query . "%")
        ->orWhere(DB::raw("CONCAT(`FirstName`, ' ', `LastName`)"), 'LIKE', "%".$query."%")
        ->join('author_book_count', 'author.id', 'author_book_count.author_ID')
        ->orderBy('count','desc')
        ->limit($count)
        ->get();
    }
    
    
    
    public function findFromArrayId($arr){
        return $this->model->whereIn('id', $arr)->get();
    }
    
    
    public function getDataByField($field, $value, $paginate){
        return $this->model->where($field, $value)->paginate($paginate);
    }
    
    // public function transformUrl($arr){
        //     $books->transform(function ($item, $key) {
            //         $item->desc->book_img = str_replace(Config::get('settings.replace_url'), Config::get('settings.path_image'), $item->desc->book_img);
            //         $item->desc->book_desc = str_limit(strip_tags($item->desc->book_desc), $limit = 100, $end = '...');
            //         return $item;
            //     });
            // }
            
        }
        