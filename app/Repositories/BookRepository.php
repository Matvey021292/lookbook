<?php

namespace App\Repositories;
use Config;
use App\Book;
use App\SelectedBook;
use Illuminate\Support\Facades\Auth;


class BookRepository extends Repository{

    private $selected;

    public function __construct(Book $books, SelectedBook $selected){
        $this->model = $books;
        $this->selected = $selected;
    }

    public function getBooks($select = '*', $count = false,  $rand = false, $pagination = false , $desc = false){

        $builder = $this->model->select($select);

        if(!$desc){
            $builder = $builder->orderBy('visit_count', 'DESC');
        }else{
            $builder = $builder->orderBy('id', 'DESC');
        }

        $builder = $builder->where('Deleted', '=', 0);
        $builder = $builder->where('Lang', 'ru')->orWhere('Lang', 'uk')->orWhere('Lang', 'ua');

        if($rand){
            $builder = $builder->inRandomOrder();
        }

        if($count){
            $builder = $builder->take($count);
        }


        if ($pagination) {
            return $builder->paginate(Config::get('settings.pagination'));
        }

        return $builder->get();
    }

    public function getBookByTitle($query, $count = '', $paginate = '', $image = false){

        $builder = $this->model
        ->where('Title', 'LIKE', '%' . $query . "%")
        ->orWhere('Title1', 'LIKE', '%' . $query . "%")
        ->where('Deleted', '=', 0)
        ->where('Lang', 'ru')->where('Lang', 'uk')->where('Lang', 'ua')
        ->orderBy('visit_count', 'DESC');

        if($count){
            $builder =  $builder->limit($count);
        }

        if($paginate){
            return $builder->paginate($paginate);
        }

        return $builder->get();
    }

}

?>
