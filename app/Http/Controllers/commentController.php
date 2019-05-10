<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Post;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;

class commentController extends Controller
{
    
    public function addcomment(Request $request){

        
    	$name=$request->name;
        
    	$body=$request->body;
    	$id=$request->id;

    	$comment= new Comment();

    	$comment->body=$body;
    	$comment->name=$name;
    	$comment->post_id=$id;

    	$comment->save();

        $comments=Comment::where('post_id','=',$id)->get();
         
        return view('blog.comment')->with(['comments'=>$comments])->render();
        
    }


    public function mail()
            {
               $name = 'Krunal';
               Mail::to('montasar.hermi@gmail.com')->send(new SendMailable($name));
               
               return 'Email was sent';
            }


    
}
