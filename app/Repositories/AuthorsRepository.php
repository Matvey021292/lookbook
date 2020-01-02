<?php

namespace App\Repositories;
use Config;
use App\Author;
use Menu;

class AuthorsRepository extends Repository{
    
    public function __construct(Author $authors){
        $this->model = $authors;
    }
    
    public function getAuthors($select = '*', $count = false,  $rand = false, $pagination = false , $desc = false){
        $authors = $this->get($select, $count, $rand,  $pagination, $desc);
        if ($authors->isEmpty()) {
            return false;
        }
        return $authors;
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