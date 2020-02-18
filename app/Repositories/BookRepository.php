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
            $builder = $this->model->select($select)->orderBy('visit_count', 'DESC');
        } else {
            $builder = $this->model->select($select)->orderBy('id', 'DESC');
        }

        $builder = $builder->where('Deleted', '=', 0);  
        $builder = $builder->where('Lang', 'ru')->orWhere('Lang', 'uk')->orWhere('Lang', 'ua');
        
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
    
    public function convert($file_path, $format){
        
        $file = str_replace('fb2.zip', $format, $file_path);
        if(!file_exists($file_path) || file_exists($file)) return $file_path;
        
        $cmd = "ebook-convert {$file_path} {$file}";
        exec(escapeshellcmd($cmd), $output, $return_var);
        
        return $file;
    }
    
}

?>