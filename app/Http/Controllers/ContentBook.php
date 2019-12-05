<?php

namespace App\Http\Controllers;

use App\Repositories\AuthorsRepository;
use App\Repositories\BookContentRepository;
use App\Repositories\BookRepository;
use Illuminate\Http\Request;
use App\BookContent;
use App\Convert;

use Config;

class ContentBook extends SiteController
{
    public function __construct(BookRepository $b_rep, AuthorsRepository $a_rep, BookContentRepository $cb_rep)
    {
        parent::__construct(new \App\Repositories\MenusRepository(new \App\Menu));
        $this->b_rep = $b_rep;
        $this->template = env('THEME') . '.read';
    }
    
    public function index($alias){
        $content = $this->b_rep->getBook($alias);
        $file = '/uploads/file/' . $content->format->link . '/' . $content->format->slug;
        $contents = $this->book_content($file);
        $contents = str_replace(public_path(), '', $contents);
        // if(empty($contents)) return redirect()->back()->withErrors(Config::get('message.text_not_found'));
        $content = view(env('THEME') . '.content_book')->with('path', $contents)->render();
        $this->vars = array_add($this->vars, 'content', $content);
        return $this->renderOutput();
    }

    public function book_content($path){
        $format = 'epub';
        $request_name = str_replace($format, 'fb2.zip', $path);
        if(!file_exists(public_path() . parse_url($request_name, PHP_URL_PATH))) return;
        $convert = new Convert();
        $file = $convert->convert_format(public_path() . parse_url($request_name, PHP_URL_PATH), $format);
        $content = new BookContent();
        return $content->unzip_file($file);
    }

}
