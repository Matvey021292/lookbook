<?php

namespace App\Repositories;
use App\Author;
use DB;

class AuthorsRepository extends Repository{
    
    public function __construct(Author $authors){
        $this->model = $authors;
    }
    
    public function getAuthors($select = '*', $take = false,  $rand = false, $pagination = false , $desc = false){
        if (!$desc) {
            $builder = $this->model->select($select);
        } else {
            $builder = $this->model->select($select)->orderBy('LastName', 'DESC');
        }
        if ($take) {
            if ($rand) {
                $builder->inRandomOrder()->take($take);
            } else {
                $builder->take($take);
            }
        }

        $builder = $builder->join('author_book_count', function ($join) {
            $join->on('author.id', '=', 'author_book_count.author_ID');
        });
       
        $builder = $builder->where('count', '>', 1);

        if ($pagination) {
            return $builder->paginate($pagination);
        }

        return $builder->get();
    }
    
    
    public function getAuthorByTitle($query, $count = '', $paginate = ''){
        $builder = $this->model
        ->where('FirstName', 'LIKE', '%' . $query . "%")
        ->orWhere('LastName', 'LIKE', '%' . $query . "%")
        ->orWhere(DB::raw("CONCAT(`FirstName`, ' ', `LastName`)"), 'LIKE', "%".$query."%")
        ->join('author_book_count', 'author.id', 'author_book_count.author_ID')
        ->orderBy('count','desc');
        
        if($count){
            $builder = $builder->limit($count);
        }
        
        if($paginate){
            return $builder->paginate($paginate);
        }
        
        return $builder->get();
    }
}

?>