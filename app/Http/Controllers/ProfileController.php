<?php

namespace App\Http\Controllers;

use App\BookRelationship;
use App\Repositories\AuthorsRepository;
use App\Repositories\BookRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends SiteController
{
    public function __construct(BookRepository $b_rep, AuthorsRepository $a_rep)
    {
        parent::__construct(new \App\Repositories\MenusRepository(new \App\Menu));
        $this->b_rep = $b_rep;
        $this->a_rep = $a_rep;
        $this->template = env('THEME') . '.profile';
    }
    public function index()
    {
        $books = 12;
        $content = view(env('THEME').'.profile_content')->with('books', $books)->render();
        $this->vars = array_add($this->vars,'content', $content);



//        $user_id = Auth::user()->id;
//
//        $sessions = session()->get('book.recently_viewed');
//        if($sessions){
//            foreach ($sessions as $session){
//                $relationship = new BookRelationship();
//                $relationship->author_id =  $user_id;
//                $relationship->book_id = $session['id'];
//
//                $relationship->save();
//            }
//        };
        return $this->renderOutput();
    }
}
