<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Repositories\RecentlyViewedRepository;
use App\Repositories\SelectedRepository;
use App\Traits\UploadTrait;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use App\Book;
use App\Profile;
use Illuminate\Support\Facades\Hash;
use Illuminate\Routing\Redirector;
use App\User;

class ProfileController extends SiteController
{
    use UploadTrait;
    protected $user;


    public function __construct(Auth $user, Rule $rule, SelectedRepository $selected)
    {
        $this->user = $user;
        $this->selected = $selected;
        $this->rule = $rule;
        parent::__construct(new \App\Repositories\MenusRepository(new \App\Menu), new RecentlyViewedRepository(new \App\Book));
        $this->template = env('THEME') . '.profile';
    }

    public function index()
    {

        if (!$this->user::check()) return redirect()->route('login');
        $user = $this->user::user();
        $books = $user->books;
        $content = view(env('THEME') . '.profile_content')->with('user', $user)->with('books', $books)->render();
        $this->vars = array_add($this->vars, 'content', $content);
        return $this->renderOutput();
    }

    public function addImage($data)
    {
        $user = $this->user::user();
        if (isset($data['profile_image'])) {
            $user->addMediaFromRequest('profile_image')->toMediaCollection('profile_image');
        }
    }

    public function show($alias)
    {
        $user = User::find($alias);
        $books = $user->books;
        $content = view(env('THEME') . '.profile_books_content')->with('books', $books)->render();
        $this->vars = array_add($this->vars, 'content', $content);
        return $this->renderOutput();
    }

    public function updateProfile(Request $request)
    {

        if (!$this->user::check()) return redirect()->route('login');
        $user = $this->user::user();
        $request->validate([
                'first_name' => 'required',
                'email' => ['required', $this->rule->unique('users')->ignore($user->id)],
                'profile_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',

            ]
        );

        if ($request->input('password')) {
            $request->validate([
                'password' => 'required|min:6|confirmed',
                'password_confirmation' => 'required|min:6'
            ]);
            $user->password = Hash::make($request->input('password'));
        }

        $user->name = $request->input('first_name');
        $user->email = $request->input('email');


        $profile = $user->profile;

        if (!$profile) {
            $profile = new Profile();
            $profile->user_id = $user->id;
        }

        if ($request->has('profile_image')) {
            $mediaItems = $user->getMedia('profile_image');
            if (isset($mediaItems[0])) {
                $mediaItems[0]->delete();
            }
            $profile->image = $this->addImage($request);

        }

        $profile->last_name = $request->input('last_name');

        $user->save();
        $user->profile()->save($profile);

        return redirect()->back()->with(['status' => 'Profile updated successfully.']);
    }

    public function BookList(Request $request, Book $books)
    {
        if(!$this->user::user()) return response()->json([
            'status' => 'error',
            'message'=> view(env('THEME') . '.auth.error_auth')->render(),
        ]);

        $book_ID = (int)$request->input('book_ID');
        $status = (int)$request->input('status_book');

        if (!$books->find($book_ID)) {
            return response()->json(['status' => 'error', 'message' => "Book not found {$book_ID}"]);
        };

        if ($status === 1) {
            $message = $this->addBookBooklist($book_ID);
        } else {
            $message = $this->removeBooklist($book_ID);
        }

        return response()->json(['status' => 'success', 'message' => $message]);
    }


    public function addBookBooklist($id)
    {
        $message = '';
        if (is_null($this->selected->findSelectedBook($id))) {
            $message = $this->selected->addBook($id);
        } else {
            $message = __('book exsists');
        }
        return $message;
    }

    public function removeBooklist($id)
    {
        $this->selected->removeBook($id);
        return __('Remove book');
    }
}
