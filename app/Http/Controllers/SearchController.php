<?php

namespace App\Http\Controllers;

use App\Repositories\AuthorsRepository;
use App\Repositories\BookRepository;
use Illuminate\Http\Request;
use DB;
use Config;
class SearchController extends SiteController
{
    public function __construct( BookRepository $b_rep, AuthorsRepository $a_rep){
        parent::__construct( new \App\Repositories\MenusRepository(new \App\Menu));
        $this->b_rep = $b_rep;
        $this->a_rep = $a_rep;
        $this->template = env('THEME').'.search';
    }

    // public function index()
    // {
    //     // return view('search.search');
    // }

    public function search(Request $request)
    {
            $output = array();
            $authors = DB::table('author')->join('author_inform', 'author.id', '=', 'author_inform.id_author')->where('title', 'LIKE', '%' . $request->search . "%")->limit(5)->get();
            if (count($authors)) {
                $output['author'] = $authors;
            }
            // $products = DB::table('book')->join('book_description', 'book.id', '=', 'book_description.book_id')->join('author_inform', 'book.author_id', '=', 'author_inform.id_author')->where('book', 'LIKE', '%' . $request->search . "%")->limit(5)->get();
            // if (count($products)) {
            //     $output['book'] = $products;
            // }
            
            echo json_encode($output);
            // return Response($output);
    }

    public function searchIndex(Request $request)
    {
        $query = $request->input('query');
        $booksItems = DB::table('book')->join('book_description', 'book.id', '=', 'book_description.book_id')->where('book', 'LIKE', '%' . $query . "%")->get();
        $authors = DB::table('author')->join('author_inform', 'author.id', '=', 'author_inform.id_author')->where('title', 'LIKE', '%' . $query . "%")->get();
        $booksItems->transform(function ($item,$key){
            $item->book_img  = str_replace('https://flibusta.is/',Config::get('settings.path_image'), $item->book_img);
            return $item;
        });
        $authors->transform(function($item, $key){
            $item->image = Config::get('settings.image_url') . $item->image;
            return $item;
        });
        $content = view(env('THEME') . '.search_content')->with('authors', $authors)->with('booksItems',$booksItems)->render();
        $this->vars = array_add($this->vars, 'content', $content);
        return $this->renderOutput();
    }

}
