<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\AuthorsRepository;
use App\Repositories\GenreRepository;
use App\Repositories\CategoryRepository;
use Menu;
use Config;

class AuthorController extends SiteController
{
    public function __construct(AuthorsRepository $a_rep, GenreRepository $g_rep, CategoryRepository $c_rep){
        
        parent::__construct( new \App\Repositories\MenusRepository(new \App\Menu));
        $this->g_rep = $g_rep;
        $this->a_rep = $a_rep;
        $this->c_rep = $c_rep;
        $this->template = env('THEME').'.author';
    }
    
    public function show($alias = false){
        $count = Config::get('settings.home_post_count');
        $author = $this->a_rep->getAuthor($alias);
        $author['link'] = str_replace('flibustahezeous3.onion', 'flibusta.is',$author['link']);
        if(empty($author)) return redirect()->back()->withErrors(Config::get('message.author_not_found'));
        
        $categories = $author->categories;
        $categories = $categories->unique('id');
        $genre = $author->genre;
        $genre = $genre->unique('id');
        $languages = $author->lang->unique('Lang');
        
        $items = $this->getBooks($author, $categories, 'ru');
        
        ksort($items);
        // $categories = view(env('THEME').'.categories')->with('books',$books)->render();
        // $category = view(env('THEME').'.category_book')->with('category', $category);
        $books = view(env('THEME').'.customCategoryItems')->with('items', $items)->render();
        $content = view(env('THEME').'.author_content')->with('author', $author)->with('languages', $languages)->with('items', $items)->render();
        
        $this->vars = array_add($this->vars,'books', $books);
        $this->vars = array_add($this->vars,'content', $content);
        // $this->vars = array_add($this->vars,'categories', $categories);
        // $this->vars = array_add($this->vars,'category', $category);
        
        return $this->renderOutput();
    }
    
    public function filter(Request $request){
        $lang = $request->input('lang_book');
        $alias = $request->input('alias');
        $author = $this->a_rep->getAuthor($alias);
        $categories = $author->categories;
        $categories = $categories->unique('id');
        $items = $this->getBooks($author, $categories, $lang);
        ksort($items);
        $books = view(env('THEME').'.customCategoryItems')->with('items', $items)->render();
        return response()->json([ 
            'status' => 'success',
            'message' => $books
         ]);
    }
    
    public function getBooks($author, $categories, $lang){
        $items = [];
        foreach($author->books->where('Lang', $lang) as $k => $book){
            if($book->category->first()){
                foreach($categories as $key => $category){
                    if($book->category->first()->id == $category->id){
                        $items[$category->id]['category'] = $category;
                        $items[$category->id]['books'][] = $book;
                    }
                }
            }
            else{
                $items[0]['books'][] = $book;
            }
        }
        return $items;
    }
    
}
