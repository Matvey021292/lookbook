<?php

namespace App\Http\Controllers;

use App\Repositories\AuthorsRepository;
use App\Repositories\BookRepository;
use Config;
use DB;
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
        
        $authors =  $this->a_rep->getAuthorByTitle($request->search, Config::get('settings.simple_search'));

        if (!empty($authors)) {
            foreach ($authors as $key => $author) {
                $author->key = 'author';
                $author->slug = '/author/' . $author->author_ID;
                $author->Title = $author->FirstName . ' ' . $author->LastName;
                $output->recipes[] = $author;
            }
        }

        $books = $this->b_rep->getBookByTitle($request->search, Config::get('settings.simple_search'));
        
        if (!empty($books)) {
            foreach ($books as $key => $book) {
                $book->key = 'book';
                $book->slug = '/book/' . $book->book_ID;
                $output->recipes[] = $book;
            }
        }
        $output->count = count($books) + count($authors);
        echo json_encode($output);
    }
    
    public function searchIndex(Request $request)
    {
        $query = $request->input('query');
        if (empty($query)) {
            return;
        }
        
        $search = (object) array();

        $books = $this->b_rep->getBookByTitle($query, Config::get('settings.simple_search'));

        if ($books->isNotEmpty()) {
            $search->books = $books;
            $search->books->transform(function ($item, $key) {
                $item->id = $item->book_ID;
                return $item;
            });
        }
        
        $authors =  $this->a_rep->getAuthorByTitle($query, Config::get('settings.simple_search'));

        if ($authors->isNotEmpty()) {
            $search->authors = $authors;
            $search->authors->transform(function ($item, $key) {
                $item->id = $item->author_ID;
                return $item;
            });
        }
        
        $content = view(env('THEME') . '.search_content')->with('search', $search)->render();
        $this->vars = array_add($this->vars, 'content', $content);
        return $this->renderOutput();
    }
    
}
