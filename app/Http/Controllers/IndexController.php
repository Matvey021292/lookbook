<?php

namespace App\Http\Controllers;

use App\Repositories\AuthorsRepository;
use App\Repositories\BookContentRepository;
use App\Repositories\BookRepository;
use App\Repositories\CategoryBookRepository;
use App\Repositories\SlidersRepository;
use App\Repositories\RecentlyViewedRepository;
use Config;
use Illuminate\Http\Request;

class IndexController extends SiteController
{

    public function __construct( SlidersRepository $s_rep, BookRepository $b_rep, AuthorsRepository $a_rep, CategoryBookRepository $c_rep, BookContentRepository $cb_rep)
    {
        parent::__construct(new \App\Repositories\MenusRepository(new \App\Menu), new RecentlyViewedRepository(new \App\Book));
        $this->s_rep = $s_rep;
        $this->b_rep = $b_rep;
        $this->a_rep = $a_rep;
        $this->c_rep = $c_rep;
        $this->template = env('THEME') . '.index';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book = $this->b_rep->getBooks();
        $category = $this->c_rep->getCategory();
        $slider =  $this->b_rep->getBooks(true);
        $author =  $this->a_rep->getAuthor();
        
        $category_temp = view(env('THEME') . '.category_book')->with('categories', $category)->render();
        $slider_temp = view(env('THEME') . '.book')->with('books', $book)->render();
        $book_temp = view(env('THEME') . '.slider')->with('sliders', $slider)->render();

        $this->vars = array_add($this->vars, 'category', $category_temp);
        $this->vars = array_add($this->vars, 'sliders', $slider_temp);
        $this->vars = array_add($this->vars, 'books', $book_temp);
        $this->contentRightBar = view(env('THEME') . '.indexBar')->with('authors', $author)->with('books', $book)->render();
        
        return $this->renderOutput();
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
