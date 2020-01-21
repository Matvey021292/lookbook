<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;

class LoginController extends Controller
{
    
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    
    use AuthenticatesUsers;
    
    /**
    * Where to redirect users after login.
    *
    * @var string
    */
    protected $redirectTo = '/';
    
    /**
    * Create a new controller instance.
    *
    * @return void
    */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    
    public function authenticate(Request $request){


        
        
        // $validCredentials = Hash::check($request['password'], $user->getAuthPassword());
        
        // if ($validCredentials) {
        //     return $user;
        // }

        $referer = $request->headers->get('referer');
        $credentials = $request->only('email', 'password');
        $remember = false;

        if($request->input('remember')){
            $remember = true;
        }
        
        $user = User::where('email', $credentials['email'])->first();
        if (Auth::attempt($credentials, $remember)) {
            $response = response()->json([ 
                'status' => 'success',
                'message' => [
                    'redirect' => $referer,
                    'code' => 1,
                ]
                
             ]);

        }else if(!$user){
            $response = response()->json([ 
                'status' => 'error',
                'message' => [
                    'content' => sprintf('Пользователь с логином %s не зарегистрирован', $credentials['email']),
                    'code' => 4,
                    'field' => 'email',
                ]
                
             ]);

        }else{
            $response = response()->json([ 
                'status' => 'error',
                'message' => [
                    'content' => sprintf('Введен неверный пароль! ', $credentials['email']),
                    'code' => 4,
                    'field' => 'password',
                ]
             ]);
        }
        
        return $response;
    }  
}
