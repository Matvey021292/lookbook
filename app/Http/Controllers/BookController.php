<?php

namespace App\Http\Controllers;

use App\Book;
use App\Repositories\BookRepository;
use Config;
use App\Repositories\RecentlyViewedRepository;
use Illuminate\Http\Request;

class BookController extends SiteController
{
    public function __construct( RecentlyViewedRepository $review_reposytory, BookRepository $b_rep)
    {
        parent::__construct(new \App\Repositories\MenusRepository(new \App\Menu), new RecentlyViewedRepository(new \App\Book));
        $this->b_rep = $b_rep;
        $this->review_reposytory = $review_reposytory;
        $this->template = env('THEME') . '.books';
    }

    public function show($alias = false, Book $product)
    {
        
        $book = $this->b_rep->getBook($alias);
        $authors = $book->authors;
        $content = view(env('THEME') . '.book_content')->with('book', $book)->render();
        $this->vars = array_add($this->vars, 'content', $content);

        $this->review_reposytory->addView($book->id);
        
        return $this->renderOutput();
    }
    
}
