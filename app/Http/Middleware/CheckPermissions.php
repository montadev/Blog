<?php

namespace App\Http\Middleware;

use Closure;

class CheckPermissions
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

    $currentUser=$request->user();

    $currentActionName=$request->route()->getActionName();
    list($controller,$method)=explode('@',$currentActionName);
   
      $controller=str_replace(["App\\Http\\Controllers\\Backend\\","Controller"],"",$controller);

    
          $crudPermissionsMap=[

    
     'crud'=>['create','store','edit','update','destroy','restore','trashed','index','view']

     ];

  
     $classesMap=[
       'Blog'=>'post',
       'Categories'=>'category',
       'Users'=>'user'


     ];

     foreach ($crudPermissionsMap as $permission => $methods) {
         
           if(in_array($method, $methods) && isset($classesMap[$controller])){

              $className=$classesMap[$controller];


              /*
        if(!$currentUser->can("{$permission}-{$className}"))

        {
             abort(403,"Forbiden access");
        }

          */
        
           }
     }
      
        return $next($request);
    }
}
