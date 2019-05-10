<?php

namespace App\Http\Controllers;
use App\Post;
use App\Ip;
use Illuminate\Http\Request;
use Jenssegers\Date\Date;
use App\Category;
use Carbon\Carbon;
use App\Info;
use Illuminate\Support\Facades\Auth;
use Alert;
use App\Pub;
use App\User;
use DB;
class BlogController extends Controller
{

	protected $limit=8;

    public function index(Request $request){ 

       $now=Carbon::now()->format('Y-m-d');

       
       $pubs=Pub::where('date_debut','<=',$now) 
                  ->where('date_fin','>=',$now)
                  ->get();

    
           
        $smart=Post::with('user')
             ->latestpost()
             ->where('validate','=',1)
             ->published()
             ->take(4)
             ->get();

                 
       
    	 $posts=Post::with('user')
             ->latestpost()
             ->where('validate','=',1)
             ->published();

        if($request->has('term')){

           $posts->where('title','LIKE',"%{$request->term}%");
        }

              
       $posts=$posts->paginate($this->limit);



    	return view('blog.index')->with(['posts'=>$posts,'pubs'=>$pubs,'smart'=>$smart]);
    }


     public function About_us(){


        return view('blog.About_us');
     }


     public function Gouvernance(){

      return view('blog.Gouvernance');
     }

     public function Membres(){

      return view ('blog.Membres');
     }

    public function showpost($slug){ 


          $now=Carbon::now()->format('Y-m-d');

       
         $pubs=Pub::where('date_debut','<=',$now) 
                  ->where('date_fin','>=',$now)
                  ->get();



          $adress_ip=request()->ip();   
            
          $post=Post::published()->where('slug','=',$slug)->first();

            
            if($post->type->type=='Membre')
            {
               if(!Auth::check())
               {
                   Alert::success('Vous Devez Connecter pour consulter cet Article', 'Vous Devez Connecter pour consulter cet Article');

                   return redirect()->back();
               }
            }
            
          $testip=$post->ips()->where('adress','=',$adress_ip)->first();

          $comments=$post->comments;  
           
           if(empty($testip)){
               
              $ip=new Ip();
           	  $ip->adress=$adress_ip;
              $ip->post_id=$post->id;
              $ip->save();
              $post->view_count+=1;
           }

         

          $post->save();



         return view('blog.show')->with([
                 'post'=>$post,
                 'pubs'=>$pubs,
                 'comments'=>$comments,
                 ]);
    }


    public function category(Category $category){
          

          $now=Carbon::now()->format('Y-m-d');       
          $pubs=Pub::where('date_debut','<=',$now) 
                  ->where('date_fin','>=',$now)
                  ->get();
          
         $categories=Category::with(['posts'=>function($query){

              $query->published();

         }])->get();

             
    	      $posts=$category->posts()  	                  
    	                  ->with('user')
    	                  ->latestpost()
    	                  ->published()
    	                  ->paginate($this->limit);

    	return view('blog.index')->with(['posts'=>$posts,'categories'=>$categories,'pubs'=>$pubs]);

    }

    public function Like(Request $request){

          
          if (!Auth::check()) {
              
              return 'test';
          }else{

               $userid=Auth::id();
               $user = User::find($userid);
               $post=Post::find($request->id);
               $haslike=DB::table('post_user')->where('user_id','=',$userid)
                                     ->where('post_id','=',$request->id)
                                     ->first();

                       
                 
                 if(!$haslike)
                 {
                   $user->likeposts()->attach($request->id);              
                   
                 }
               return count($post->likeusers); 
          }
         
    }

    public function dislike(Request $request){

           
               $userid=Auth::id();
               $user = User::find($userid);
               $post=Post::find($request->id);
               $haslike=DB::table('post_user')->where('user_id','=',$userid)
                                     ->where('post_id','=',$request->id)
                                     ->delete();


               

               return count($post->likeusers);                     

    }

    
}
  