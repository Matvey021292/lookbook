<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\SlidersRepository;
use App\Repositories\BookRepository;
use App\Repositories\AuthorsRepository;
use Config;

class IndexController extends SiteController
{

    public function __construct(SlidersRepository $s_rep, BookRepository $b_rep, AuthorsRepository $a_rep){
        parent::__construct( new \App\Repositories\MenusRepository(new \App\Menu));
        $this->s_rep = $s_rep;
        $this->b_rep = $b_rep;
        $this->a_rep = $a_rep;
        $this->bar = 'right';
        $this->template = env('THEME').'.index';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $booksItems = $this->getBook();
        $books = view(env('THEME') . '.book')->with('books', $booksItems)->render();
        $this->vars = array_add($this->vars,'books',$books);



        $slidersItems = $this->getSliders();
        $sliders = view(env('THEME') . '.slider')->with('sliders', $slidersItems)->render();
        $this->vars = array_add($this->vars,'sliders',$sliders);

        $authors = $this->getAuthor();
        $this->contentRightBar = view(env('THEME') . '.indexBar')->with('authors', $authors)->with('books', $books)->render();

        return $this->renderOutput();
    }

    public function getAuthor(){
        $authors = $this->a_rep->get('*', Config::get('settings.authors_show_count'));
        if($authors->isEmpty()){
            return false;
        }
        return $authors;
    }

    protected function getBook(){
        $books = $this->b_rep->get('*', Config::get('settings.home_port_count'));
        if($books->isEmpty()){
            return false;
        }
        $books->transform(function($item, $key){
            $item->desc->book_img = str_replace('https://librusec.pro/static/img/', Config::get('settings.slider_path'), $item->desc->book_img) . '.jpg';
            $item->desc->book_desc = str_limit(strip_tags($item->desc->book_desc), $limit = 100, $end = '...');
            return $item;
        });
        return $books;
    }

    public function getSliders(){
        $sliders = $this->s_rep->get('*', Config::get('settings.home_port_count'), true);
        if($sliders->isEmpty()){
            return false;
        }
        $sliders->transform(function($item, $key){
            $item->desc->book_img = str_replace('https://librusec.pro/static/img/', Config::get('settings.slider_path'), $item->desc->book_img);
            $item->desc->book_desc = str_limit(strip_tags($item->desc->book_desc), $limit = 100, $end = '...');
            return $item;
        });
        return $sliders;
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
