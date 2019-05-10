<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Post;
use Illuminate\Support\Facades\Route;
class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        $route=Route::getCurrentRoute()->parameters();

         if($route){
        $id=$route['blog'];
        $post=Post::find($id);

         
         if(!$post->image){

             return [
            
              'title'=>'required',
              'body'=>'required',
              'published_at'=>'date_format:Y-m-d',
              'image'=>'required',
    
                ];
              }
             else
               {

                  return [
                  
                    'title'=>'required',
                    'body'=>'required',
                    'published_at'=>'date_format:Y-m-d',
                  
                    ];
               }

             }else{

                 return [
            
              'title'=>'required',
              'body'=>'required',
              'published_at'=>'date_format:Y-m-d',
              'image'=>'required',
    
                ];

             }  
        
    }
}
