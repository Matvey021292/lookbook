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

        $qsearch = strtolower(trim($request->search));
        $request_replace = '';
        $output->recipes = [];

        $authors = $this->a_rep->getAuthorByTitle($qsearch, Config::get('settings.simple_search'), false, true);

        // if($authors->isEmpty()){
        //     $request_replace = $this->textswitch($qsearch);
        //     $authors = $this->a_rep->getAuthorByTitle($request_replace, Config::get('settings.simple_search'), false, true);
        // };

        if (!empty($authors)) {
            foreach ($authors as $key => $author) {
                $author->key = 'Автор';
                $author->slug = '/author/' . $author->author_ID;
                $author->Title = $author->FirstName . ' ' . $author->LastName;
                $author->File = url(Config::get('settings.file_path_author') . $author->File);
                $output->recipes[] = $author;
            }
        }

        $books = $this->b_rep->getBookByTitle($qsearch, Config::get('settings.simple_search'), false, true);
        // if($books->isEmpty()){
        //     $request_replace = $this->textswitch($qsearch);
        //     $books = $this->b_rep->getBookByTitle($request_replace, Config::get('settings.simple_search'), false, true);
        // };

        if (!empty($books)) {
            foreach ($books as $key => $book) {
                $book->key = 'Книга';
                $book->slug = '/book/' . $book->id;
                $output->recipes[] = $book;
            }
        }
        
        $output->count = count($books) + count($authors);
        if($request_replace && $output->count){
            $output->query = mb_convert_case($request_replace, MB_CASE_TITLE, "UTF-8");
        }
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
    
    public function textswitch ($text) 
    {
       $str_search = array(
       "й","ц","у","к","е","н","г","ш","щ","з","х","ъ",
       "ф","ы","в","а","п","р","о","л","д","ж","э",
       "я","ч","с","м","и","т","ь","б","б","ю","ю"
       );
       $str_replace = array(
       "q","w","e","r","t","y","u","i","o","p","[","]",
       "a","s","d","f","g","h","j","k","l",";","'",
       "z","x","c","v","b","n","m",",","<",".",">"
       );
       return str_replace($str_replace,$str_search, $text);
    }

}
