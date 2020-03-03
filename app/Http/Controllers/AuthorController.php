<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\AuthorsRepository;
use App\Repositories\CategoryRepository;
use Menu;

class AuthorController extends SiteController
{
    public function __construct(AuthorsRepository $a_rep, CategoryRepository $c_rep){

        parent::__construct( new \App\Repositories\MenusRepository(new \App\Menu));
        $this->a_rep = $a_rep;
        $this->c_rep = $c_rep;
        $this->template = env('THEME').'.author';
    }

    public function show($alias = false, Request $request){

        $lang = $request->input('lang') ? $request->input('lang') : 'ru';

        $author = $this->a_rep->getModel($alias);

        if(empty($author)) return redirect()->back()->withErrors(Config::get('message.author_not_found'));

        if($author->desc && $author->desc->Body){
            $author->desc->Body  = str_replace(']', '>',str_replace('[','<', $author->desc->Body));
        }

        $categories = $author->categories->unique('id');

        $languages = $author->lang->unique('Lang');

        $items = $this->getBooks($author, $categories, $lang);
        if(!$items) $items = $this->getBooks($author, $categories);
        $tranlate_items = $this->getBooksTranslate($author, $categories, $lang);

        ksort($items);

        $books = view(env('THEME').'.customCategoryItems')->with('items', $items)->render();
        $translate_books = view(env('THEME').'.customCategoryTranslateItems')->with('tranlate_items', $tranlate_items)->render();
        $content = view(env('THEME').'.author_content')->with('author', $author)->with('languages', $languages)->with('items', $items)->render();

        $this->vars = array_add($this->vars,'books', $books);
        $this->vars = array_add($this->vars,'author', $author);
        $this->vars = array_add($this->vars,'translate_books', $translate_books);
        $this->vars = array_add($this->vars,'content', $content);


        return $this->renderOutput();
    }

    public function filter(Request $request){

        $author = $this->a_rep->getModel($request->input('alias'));
        $categories = $author->categories->unique('id');
        $items = $this->getBooks($author, $categories, $request->input('lang'));
        ksort($items);

        $books = view(env('THEME').'.customCategoryItems')->with('items', $items)->render();

        return response()->json([
            'status' => 'success',
            'message' => $books
         ]);
    }

    public function getBooks($author, $categories, $lang = ''){
        $items = [];
        $books = $author->books;
        if($lang){
            $books = $books->where('Lang', $lang);
        }
        foreach($books as $k => $book){
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

    public function getBooksTranslate($author, $categories, $lang){
        $items = [];
        foreach($author->translate->where('Lang', $lang) as $k => $books){
            if($books->category->first()){
                foreach($categories as $key => $category){
                    if($books->category->first()->id == $category->id){
                        $items[$category->id]['category'] = $category;
                        $items[$category->id]['books'][] = $books;
                    }
                }
            }
            else{
                $items[0]['books'][] = $books;
            }
        }
        return $items;
    }

}
