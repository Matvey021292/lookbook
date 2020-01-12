<?php

namespace App\Http\Controllers;

use Config;
use Illuminate\Http\Request;
use App\Repositories\BookRepository;

class PublisherController extends SiteController
{
    public function __construct( BookRepository $b_rep)
    {
        parent::__construct(new \App\Repositories\MenusRepository(new \App\Menu));
        $this->b_rep = $b_rep;
        $this->template = env('THEME') . '.books';
    }
    
    public function show($slug = false){
        $paginate = Config::get('settings.home_post_count');
        
        $category = (object) [];
        $category->Title = $slug;
        $books = $this->b_rep->getDataByField('FileAuthor', $slug, $paginate);
        
        $content = view(env('THEME').'.category')
                   ->with('books', $books)
                   ->with('category', $category)
                   ->render();
        
        $this->vars = array_add($this->vars,'content', $content);
        
        return $this->renderOutput();
    }
}
