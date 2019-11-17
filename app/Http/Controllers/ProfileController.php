<?php

namespace App\Http\Controllers;

use App\BookRelationship;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Repositories\RecentlyViewedRepository;
use App\Traits\UploadTrait;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use App\Profile;
use App\Book;
use App\BookList;
use Illuminate\Support\Facades\Hash;
use Illuminate\Routing\Redirector;

class ProfileController extends SiteController
{
    use UploadTrait;
    
    public function __construct(Auth $user, Rule $rule)
    {
        $this->user = $user;
        $this->rule = $rule;
        parent::__construct(new \App\Repositories\MenusRepository(new \App\Menu), new RecentlyViewedRepository(new \App\Book));
        $this->template = env('THEME') . '.profile';
    }
    
    public function index()
    {
        
        if(!$this->user::check()) return redirect()->route('login');
        $user = $this->user::user();
        $user = view(env('THEME').'.profile_content')->with('user', $user)->render();
        $this->vars = array_add($this->vars,'user', $user);
        return $this->renderOutput();
    }
    
    public function show(){
        
    }
    
    public function updateProfile(Request $request)
    {
        
        if(!$this->user::check()) return redirect()->route('login');
        $user = $this->user::user();
        $request->validate([
            'first_name'              =>  'required',
            'email' => [ 'required', $this->rule->unique('users')->ignore($user->id)],
            'profile_image'     =>  'image|mimes:jpeg,png,jpg,gif|max:2048',
            
            ]
        );
        
        if($request->input('password')){
            $request->validate([ 
                'password' => 'required|min:6|confirmed',
                'password_confirmation' => 'required|min:6'
                ]);
            }
            
            $user->name = $request->input('first_name');
            $user->email = $request->input('email');
            
            $user->password =  Hash::make($request->input('password'));
            
            $profile = $user->profile;
            
            if(!$profile){
                $profile = new Profile(['user_id' => $user->id]);
            }
            
            if ($request->has('profile_image')) {
                $profile->image = $this->handleProfileImage($request, $profile);
            }
            
            $profile->last_name = $request->input('last_name'); 
            
            $user->save();
            $user->profile()->save($profile);
            
            return redirect()->back()->with(['status' => 'Profile updated successfully.']);
        }
        
        public function handleProfileImage($request, $profile){
            $image = $request->file('profile_image');
            $name = Str::slug($request->input('first_name')).'_'.time();
            $folder = '/uploads/images/';
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            $this->uploadOne($image, $folder, 'public', $name);
            $this->deleteOne($profile->image);
            return $filePath;
        }
        
        public function addBookToList(Request $request, Book $book){
            $book_id = $request->input('book');
            $book = Book::find($book_id);
            if(!$book) return;
            $this->addBook($book_id);

        }

        public function addBook($book_id){
            $book = new BookList;
            $book->stage = 1;
            $book->last_page = 0;
            $book->book_id = $book_id;
            $book->user_id = AUTH::id();
            $book->save();
        }
        
    }
    