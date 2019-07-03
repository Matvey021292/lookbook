<?php

namespace App\Http\Controllers;

use App\Repositories\AuthorsRepository;
use App\Repositories\BookRepository;
use App\Repositories\CategoriesRepository;
use Illuminate\Http\Request;
use Config;
use Menu;

class AuthorController extends SiteController
{
    public function __construct( BookRepository $b_rep, AuthorsRepository $a_rep, CategoriesRepository $cs_rep){

        parent::__construct( new \App\Repositories\MenusRepository(new \App\Menu));
        $this->b_rep = $b_rep;
        $this->cs_rep = $cs_rep;
        $this->a_rep = $a_rep;
        $this->bar = 'right';
        $this->template = env('THEME').'.author';
    }

    public function show($alias = false){
        $author = $this->a_rep->one($alias);
        $cat = $author->categories;
        $cat = $this->getCatMenu($cat);


        $author->desc->image = Config::get('settings.image_url') . $author->desc->image;

        $author->book->transform(function($item, $key){

            $item->desc->book_img =  str_replace('https://flibusta.is/',Config::get('settings.path_image'), $item->desc->book_img);
            return $item;
        });
        $books_c = $author->book;
        $cat = view(env('THEME').'.categories')->with('books_c',$books_c)->with('cat', $cat)->render();
        $content = view(env('THEME').'.author_content')->with('author', $author)->render();
        $this->vars = array_add($this->vars,'books_c', $books_c);
        $this->vars = array_add($this->vars,'cat', $cat);
        $this->vars = array_add($this->vars,'content', $content);
        return $this->renderOutput();
    }



    protected function getCatMenu($menu){
        $mBuilder = Menu::make('author_menu', function($m) use ($menu){
            foreach($menu as $item){
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
}
