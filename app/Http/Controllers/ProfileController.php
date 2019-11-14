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

class ProfileController extends SiteController
{
    use UploadTrait;
    
    public function __construct(Auth $user)
    {
        $this->user = $user;
        parent::__construct(new \App\Repositories\MenusRepository(new \App\Menu), new RecentlyViewedRepository(new \App\Book));
        $this->template = env('THEME') . '.profile';
    }
    public function index()
    {
        
        $user = $this->getAuthUser();
        $user = view(env('THEME').'.profile_content')->with('user', $user)->render();
        $this->vars = array_add($this->vars,'user', $user);
        return $this->renderOutput();
    }
    
    public function getAuthUser ()
    {
        return $this->user::user();
    }
    
    public function updateProfile(Request $request)
    {
        $user = $this->getAuthUser()->findOrFail(auth()->user()->id);
        
        $request->validate([
            'first_name'              =>  'required',
            'email' => [
                'required',
                Rule::unique('users')->ignore($user->id),
            ],
            'profile_image'     =>  'image|mimes:jpeg,png,jpg,gif|max:2048'
            ]);
            
    
            $user->name = $request->input('first_name');
            $user->email = $request->input('email');
            
            $profile = $user->profile;
            if(!$profile){
                $profile = new Profile();
                $profile->user_id = $user->id;
             }
            

            if ($request->has('profile_image')) {
                $image = $request->file('profile_image');
                $name = Str::slug($request->input('first_name')).'_'.time();
                $folder = '/uploads/images/';
                $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
                $this->uploadOne($image, $folder, 'public', $name);
                $profile->image = $filePath;
            }
            dd($profile);
            $user->save($profile);
           
            
            return redirect()->back()->with(['status' => 'Profile updated successfully.']);
        }
    }
    