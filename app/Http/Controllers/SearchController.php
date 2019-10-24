<?php

namespace App\Http\Controllers;

use App\Repositories\AuthorsRepository;
use App\Repositories\BookRepository;
use DB;
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
        $authors = DB::table('author')->join('author_inform', 'author.id', '=', 'author_inform.id_author')->where('title', 'LIKE', '%' . $request->search . "%")->limit(7)->get();
        if (!empty($authors)) {
            foreach ($authors as $key => $author) {
                $author->key = 'author';
                $author->slug = '/author/' . $author->slug;
                $output->recipes[] = $author;
            }
        }
        
        $books = DB::table('book')->join('book_description', 'book.id', '=', 'book_description.book_id')->join('author_inform', 'book.author_id', '=', 'author_inform.id_author')->where('book', 'LIKE', '%' . $request->search . "%")->limit(10)->get();
        if (!empty($books)) {
            foreach ($books as $key => $book) {
                $book->key = 'book';
                $book->title = $book->book;
                $book->slug = '/book/' . $book->slug;
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
        
        $booksItems = $this->b_rep->getBookByTitle('*', $query);
        $authors = $this->a_rep->getAuthorByTitle('*', $query);
        $authors->transform(function ($item, $key) {
            if(isset($item->desc->image)){
                $item->desc->image =  Config::get('settings.image_url') . $item->desc->image;
            }
            return $item;
        });
        $content = view(env('THEME') . '.search_content')->with('authors', $authors)->with('booksItems', $booksItems)->render();
        $this->vars = array_add($this->vars, 'content', $content);
        return $this->renderOutput();
    }
    
}
