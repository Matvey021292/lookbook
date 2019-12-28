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

class ProfileController extends SiteController
{
    use UploadTrait;

    
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
        
        if(!$this->user::check()) return redirect()->route('login');
        $user = $this->user::user();
        
        $user = view(env('THEME').'.profile_content')->with('user', $user)->render();
        $this->vars = array_add($this->vars,'user', $user);
        return $this->renderOutput();
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
                $profile = new Profile();
                $profile->user_id = $user->id;
            }
            
            if ($request->has('profile_image')) {
                $this->deleteOne($profile->image);
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
            return $filePath;
        }
        
        public function addBookList(Request $request, Book $book){
            $book_id = $request->input('book');
            if(!$book->find($book_id)) return;
            if (is_null($this->selected->findSelectedBook($book_id))) {
                $this->selected->addBook($book_id);
                $message = 'Книга успешно добалена на полку';
            } else {
                $message = 'Книга уже добалена на полку';
            }
            return response()->json(['message'=> $message ]);
        }
        
        public function removeBookList(Request $request){
            $this->selected->removeBook($request->input('book'));
            return response()->json(['message'=>'Книга удалена']);
        }
    }
    