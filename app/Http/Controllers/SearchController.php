<?php

namespace App\Http\Controllers;

use App\Repositories\AuthorsRepository;
use App\Repositories\BookRepository;
use Config;
use Illuminate\Http\Request;


class SearchController extends SiteController
{
    public function __construct(BookRepository $b_rep, AuthorsRepository $a_rep)
    {
        parent::__construct(new \App\Repositories\MenusRepository(new \App\Menu));
        $this->b_rep = $b_rep;
        $this->a_rep = $a_rep;
        $this->template = env('THEME') . '.search';
    }
    
    public function index()
    {
        return view('search.search');
    }
    
    public function search(Request $request)
    {
        $output = (object) array();

        $output->count = 0;
        
        $output->recipes = [];
        
        $authors =  $this->a_rep->getAuthorByTitle($request->search, Config::get('settings.simple_search'), false, true);

        if (!empty($authors)) {
            foreach ($authors as $key => $author) {
                $author->key = 'author';
                $author->slug = '/author/' . $author->author_ID;
                $author->Title = $author->FirstName . ' ' . $author->LastName;
                $output->recipes[] = $author;
            }
        }

        $books = $this->b_rep->getBookByTitle($request->search, Config::get('settings.simple_search'), false, true);
        
        if (!empty($books)) {
            foreach ($books as $key => $book) {
                $book->key = 'book';
                $book->slug = '/book/' . $book->id;
                $output->recipes[] = $book;
            }
        }
        $output->count = count($books) + count($authors);
        echo json_encode($output);
    }
    
    public function books(Request $request){
        $count =  Config::get('settings.pagination');
        $query = $request->input('query');
        $books = $this->b_rep->getBookByTitle($query, '', $count);
        $content = view(env('THEME') . '.books_content')->with('books', $books)->render();
        $this->vars = array_add($this->vars, 'content', $content);
        return $this->renderOutput();
    }

    public function authors(Request $request){
        $count =  Config::get('settings.pagination');
        $query = $request->input('query');
        $authors = $this->a_rep->getAuthorByTitle($query, '', $count);
        $authors->transform(function ($item, $key) {
            $item->id = $item->author_ID;
            return $item;
        });
        $content = view(env('THEME') . '.authors_content')->with('authors', $authors)->render();
        $this->vars = array_add($this->vars, 'content', $content);
        return $this->renderOutput();
    }
    

    public function searchIndex(Request $request)
    {
        $query = $request->input('query');
        if (empty($query)) {
            return;
        }
        
        $search = [];
        $books = $this->b_rep->getBookByTitle($query);
       

        if ($books->isNotEmpty()) {
            $search['books'] = $books;
            $search['books']->transform(function ($item, $key) {
                $item->id = $item->id;
                return $item;
            });
        }
        
        $authors =  $this->a_rep->getAuthorByTitle($query);
        if ($authors->isNotEmpty()) {
            $search['authors'] = $authors;
            $search['authors']->transform(function ($item, $key) {
                $item->id = $item->author_ID;
                return $item;
            });
        }
        
        $content = view(env('THEME') . '.search_content')->with('search', $search)->render();
        $this->vars = array_add($this->vars, 'content', $content);
        return $this->renderOutput();
    }
    
}
