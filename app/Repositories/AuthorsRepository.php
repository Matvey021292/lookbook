<?php

namespace App\Repositories;
use Config;
use App\Author;
use Menu;

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
    
    public function getCatMenu($menu, $books){
        $mBuilder = Menu::make('author_menu', function($m) use ($menu, $books){
            foreach($menu as $k => $item){
                if($item->parent_id == 0){
                    $m->add($item->category,$item->slug)->id($item->id);
                }else{
                    if ($m->find($item->parent_id)) {
                        $m->find($item->parent_id)->add($item->category,$item->slug)->id($item->id);
                    }
                }
            }
        });
        return $mBuilder;
    }
    
    public function getAuthor($id)
    {
        return $this->model->where('id', $id)->first();
    }
}

?>