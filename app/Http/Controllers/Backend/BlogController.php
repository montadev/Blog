<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\Category;
Use Alert;
use App\Http\Requests\PostRequest;
use App\Info;
use App\Http\Requests\storepub;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;
use App\Pub;

class BlogController extends backendcontroller
{
      
     protected $limit=5;
     protected $uploadPath;
     protected $uploadpub;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */

     public function __construct(){

        Parent::__construct();

        $this->uploadPath=public_path('front/img');
        $this->uploadpub=public_path('front/pub');

        $this->middleware('check-post');
        $this->middleware('check-menbre');
     }

    public function index()
    {

         $posts=Post::with('category')
         ->with('user')
         ->Latestpost()
         ->paginate($this->limit);


        
        $postcount=Post::count();
        
        return view('backend.blog.index',compact('posts','postcount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Post $post)
    {
        
         $categories=Category::all();

           

          if(!count($categories)){
           
           Alert::success('ajouter au moins une catégorie', 'ajouter au moins une catégorie');
                  
            return redirect()->route('categories.create');

          }
        return view('backend.blog.create')->with('post',$post);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        


            $data=$this->handlerequest($request);          

            $user = Auth::user();
               
            $test=$user->posts()->create($data);
            Alert::success('Article ajouté avec succès', 'Article ajouté avec succès');
                  
            return redirect()->back();

                  
           
    }

    public function handlerequest($request){


         $data=$request->all();

         if($request->hasFile('image')){

              
             $image=$request->file('image');
             $filename=$image->getClientOriginalName();
             $newfilename=time().$filename;

             $destination=$this->uploadPath;
             $image->move($destination,$newfilename);
             

             $data['image']=$newfilename;


         }

         return $data;
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=Post::find($id);

        
        return view('backend.blog.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, $id)
    {
     
       $post=Post::find($id);


       $data=$this->handlerequest($request);
   
       $post->slug = null;
       $post->update($data); 
       Alert::success('Article mis à jour avec succès', 'poste mis à jour avec succès');
       return redirect()->route('blog.index');     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    

           $post=Post::find($id);

           $post->delete();
              Alert::success('votre Article déplacé à la corbeille', 'votre Article déplacé à la corbeille');

              return redirect()->route('blog.index');
           
    }


    public function trashed(){

        $posts =Post::onlyTrashed()
                ->paginate($this->limit);
        $postcount=count($posts);
        return view('backend.blog.trashed')->with(['posts'=>$posts,'postcount'=>$postcount]);
    }

    public function permanatly($id){

           $post=Post::withTrashed()
                ->where('id', $id)
                ->first();


                 $post->forceDelete();
         Alert::success('votre message a été définitivement supprimé', 'votre message a été définitivement supprimé');
               
         return redirect()->back();      
    }


    public function restore($id){

            Post::withTrashed()
                ->where('id', $id)
                ->restore();

                Alert::success('votre message a été restauré avec succès', 'votre message a été restauré avec succès');
       
             return redirect()->route('blog.index');   
                
    }

    public function valide($id){

      
       $post=Post::find($id);

       $post->validate=1;

       $post->update();

       return redirect()->back();

    }


    public function rejete($id){



           $post=Post::find($id);

           $post->validate=0;

           $post->update();

           $send_to=$post->user->email;
           $send_name=$post->user->name; 

           /* send email when post rejected */

               $name = 'Bonjour ' .$send_name.' Nous vous informe que votre article a éte rejeté --Merci pour votre comprehension ';

               Mail::to($send_to)->send(new SendMailable($name));
               
              

            /*end sendinf email */

           return redirect()->back();
    }

    public function Info(Info $info){

          
          return view('backend.info.create')->with('info',$info);
    }

    public function storeinfo(Request $request){

    
        $validatedData = $request->validate([
        'body' => 'required',
        'date' => 'date:Y-m-d H:i:s',
    ]);



        $Info_jour=new Info();
        $Info_jour->body=$request->body;
        $Info_jour->date=$request->date;
        $Info_jour->save();

        Alert::success('Evénement de jour ajouté avec succès', 'vEvénement de jour ajouté avec succès');


        return redirect()->back();

    }

    public function listinfo(){

       $infos= Info::paginate(8);

       return view('backend.info.index')->with('infos',$infos);
    }

    public function Infodelete($id){

        $info=Info::find($id);

        $info->delete();

Alert::success('Evénement supprimé avec succès', 'Evénement supprimé avec succès');
        return redirect()->back();
    }


    public function Infoupdate($id){

         $event=Info::find($id);

         return view('backend.info.update')->with('event',$event);
    }


    public function Infoupdatestore(Request $request,$id){


          $event=Info::find($id);
          $event->body=$request->body;
          $event->date=$request->date;

          $event->update();

          Alert::success('Evénement mis a jour avec succès', 'Evénement mis a jour avec succès');

       
       return redirect()->back();
    }


    public function createpub(Pub $pub){


        return view('backend.pub.create')->with('pub',$pub);
    }

    public function storepub(Request $request){

          
          $validatedData = $request->validate([
                'title'=>'required',
              'date_debut'=>'date_format:Y-m-d',
              'date_fin'=>'date_format:Y-m-d',
              'image'=>'required',
                ]);


            $data=$this->handlerequestpub($request);
           
            $pub=new Pub();
            $pub->create($data);

            Alert::success('Publicité ajouté avec succès', 'Publicité ajouté avec succès');
                  
            return redirect()->back();

         
    }

      public function handlerequestpub($request){


         $data=$request->all();

         if($request->hasFile('image')){


             $image=$request->file('image');
             $filename=$image->getClientOriginalName();
             $newfilename=time().$filename;

             $destination=$this->uploadpub;
             $image->move($destination,$newfilename);
             

             $data['image']=$newfilename;


         }

         return $data;
    }



    public function listofpub(){


          $pubs=Pub::paginate($this->limit);

          return view('backend.pub.index')->with('pubs',$pubs);
    }

    public function deletepub($id){


         $pub=Pub::find($id);

         $pub->delete();
         Alert::success('Publicité supprimé avec succès', 'Evénement supprimé avec succès');
         return redirect()->route('blog.pub.index');
    }

    public function updatepub($id){

              $pub=Pub::find($id);

              return view('backend.pub.update')->with('pub',$pub);

    }



    public function updatepubb(Request $request,$id){


                    

                 $validatedData = $request->validate([
                'title'=>'required',
              'date_debut'=>'date_format:Y-m-d',
              'date_fin'=>'date_format:Y-m-d',
               //'image'=>'required|image',
                ]);


             $data=$this->handlerequestpub($request); 
             

             $pub=Pub::find($id);
             $pub->update($data);

            Alert::success('Publicité mis a jour avec succès', 'Publicité mis a jour avec succès');
                  
            return redirect()->back();   

    }
}
