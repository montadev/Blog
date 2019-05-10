<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
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
    protected $redirectTo = '/home';


    public function login(Request $request){


          $email=$request->email;
          $password=$request->password;

           //dd($email);
           //dd($password);

        if (Auth::attempt(['email' => $email, 'password' => $password, 'test' => 1]))
         {
    
                
            return redirect()->intended('home');
        }
        else
        {
               
            Session::flash('status', 'E-mail ou Mot de passe Invalide');
            return  redirect()->back();
             
             
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
