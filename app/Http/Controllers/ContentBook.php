<?php

namespace App\Http\Controllers;

use App\Repositories\AuthorsRepository;
use App\Repositories\BookContentRepository;
use App\Repositories\BookRepository;
use Illuminate\Http\Request;
use App\BookContent;
use Config;

class ContentBook extends SiteController
{
    public function __construct(BookRepository $b_rep, AuthorsRepository $a_rep, BookContentRepository $cb_rep)
    {
        parent::__construct(new \App\Repositories\MenusRepository(new \App\Menu));
        $this->b_rep = $b_rep;
        $this->template = env('THEME') . '.books';
    }
    
    public function index($alias){
        $content = $this->b_rep->getBook($alias);
        $file = '/uploads/file/' . $content->format->link . '/' . $content->format->slug;
        $contents = $this->book_content($file);
        if(empty($contents)) return redirect()->back()->withErrors(Config::get('message.text_not_found'));
        $contents = json_decode($contents->content(), true)['content'];
        $content = view(env('THEME') . '.content_book')->with('content', $contents)->render();
        $this->vars = array_add($this->vars, 'content', $content);
        return $this->renderOutput();
    }

    public function book_content($path){
        $content = new BookContent();
        return $content->get_file_content($path);
    }

}
