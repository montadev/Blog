<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Post;
class CheckPost
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $id=Route::getCurrentRoute()->parameters();
        $user = Auth::user();


          if(!empty($id)){
 
          if($user->role->title=='admin' || $user->role->title=='editor')

               {

                return $next($request);
               }

              else

                {  
                
                    $id_post=$id['blog'];

                    $post=Post::find($id_post);

                     if(($user->role->title=='author') && ($user->role->title==$post->user->role->title))
                     {

                        return $next($request);       
                     }

                     else

                     {

                          return redirect()->route('blog.index');
                     }
                }

             }



             return $next($request);
    }
}
