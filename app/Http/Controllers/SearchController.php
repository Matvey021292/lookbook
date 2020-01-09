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
        $authors = DB::table('author')->join('author_inform', 'author.id', '=', 'author_inform.author_ID')->where('Title', 'LIKE', '%' . $request->search . "%")->limit(7)->get();
        if (!empty($authors)) {
            foreach ($authors as $key => $author) {
                $author->key = 'author';
                $author->slug = '/author/' . $author->author_ID;
                $output->recipes[] = $author;
            }
        }
        $books = DB::table('book')->join('book_inform', 'book.id', '=', 'book_inform.book_ID')->where('book_inform.Title', 'LIKE', '%' . $request->search . "%")->limit(10)->get();
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
        $books = $this->b_rep->getBookByTitle('*', $query);
        if ($books->isNotEmpty()) {
            $search->books = $books;
        }
        $authors = $this->a_rep->getAuthorByTitle('*', $query);
        if ($authors->isNotEmpty()) {
            $search->authors = $authors;
            $search->authors->transform(function ($item, $key) {
                if (isset($item->desc->image)) {
                    $item->desc->image = Config::get('settings.image_url') . $item->desc->image;
                }
                return $item;
            });
        }
        
        $content = view(env('THEME') . '.search_content')->with('search', $search)->render();
        $this->vars = array_add($this->vars, 'content', $content);
        return $this->renderOutput();
    }
    
}
