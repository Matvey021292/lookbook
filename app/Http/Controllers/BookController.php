<?php

namespace App\Http\Controllers;

use App\Book;
use App\Repositories\AuthorsRepository;
use App\Repositories\BookRepository;
use Config;

class BookController extends SiteController
{
    public function __construct(BookRepository $b_rep, AuthorsRepository $a_rep)
    {
        parent::__construct(new \App\Repositories\MenusRepository(new \App\Menu));
        $this->b_rep = $b_rep;
        $this->a_rep = $a_rep;
        $this->bar = 'right';
        $this->template = env('THEME') . '.books';
    }

    public function show($alias = false, Book $product)
    {
        $book = $this->b_rep->one($alias);
        $book->author->desc->image = Config::get('settings.image_url') . $book->author->desc->image;
//        $book->desc->book_img = asset(env('THEME') . $book->desc->book_img);
        $book->desc->book_img = str_replace('https://flibusta.is/', Config::get('settings.path_image'), $book->desc->book_img);
        $content = view(env('THEME') . '.book_content')->with('book', $book)->render();
        $this->vars = array_add($this->vars, 'content', $content);
        $book_session = array_merge($book->desc->getAttributes(), $book->getAttributes());
        $recently_viewed = session()->get('book.recently_viewed');

        if (!isset($recently_viewed)) {
            session()->push('book.recently_viewed', $book_session);
        } else {
            $bool = false;
            foreach ($recently_viewed as $key => $recently) {
                if ($recently['id'] == $book->id) {
                    $bool = true;
                    break;
                }
            }
            if (!$bool) {
                session()->push('book.recently_viewed', $book_session);
            }
        }

        return $this->renderOutput();
    }

}
