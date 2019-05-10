<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Alert;
use App\Http\Requests\UserRequest;
use App\Http\Requests\LoginRequest;
use App\User;
class LoginController extends Controller
{
   
   public function login(LoginRequest $request){

           
           
           $credentials = $request->only('email', 'password');

           $credentials['test']=0;

               

        if (Auth::attempt($credentials)) 
          {
                 if($request->ajax())
                  {
                    return response()->json(['status'=>'Vous êtes Connecté Avec succes']);
                  }
                  else
                  {
                     Alert::success('Vous êtes Connecté Avec succes', 'Vous êtes Connecté Avec succes');
                     return  redirect()->back();
                  } 
        	       
          }
        else
          {
                if($request->ajax())
                  {
                    return response()->json(['status'=>'E-mail ou Mot de passe Invalide']);
                  }
                  else
                  {
                     Session::flash('status', 'E-mail ou Mot de passe Invalide');
                     return  redirect()->back();
                  }  
        	   
          }
   }

   public function logout(){

         
         Auth::logout();
         Alert::success('Vous êtes Déconnecté', 'Vous êtes Déconnecté');
         return  redirect()->back();
   }

   public function inscription(UserRequest $request){

             $user=new User();

              $user->name=$request->name;
              $user->email=$request->email;
              $user->password=bcrypt($request->password);
              $user->test=0;
              $user->save();
            return response()->json('Inscription Avec Succès');
    }
}
