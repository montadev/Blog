<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;
class Post extends Model
{
         use SoftDeletes;
	     use Sluggable;
        protected $fillable = ['user_id','title','body','slug','published_at','created_at','updated_at','view_count','category_id','image','deleted_at','type_id'];

       protected $dates = ['published_at'];
       
	 

	  public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }



       public function type()
    {
        return $this->belongsTo('App\PostType');
    }





	       public function comments()
    {
        return $this->hasMany('App\Comment');
    }

       public function user()
		{
		  return $this->belongsTo('App\User');
		}

		public function category(){

			return $this->belongsTo('App\Category');
		}

    

		public function ips()
         {
            return $this->hasMany('App\Ip');
          }


		public function getImageAttribute($value)
    {
        return asset('front/img/'.$value);
    }

    public function scopeLatestpost($query){

    	return $query->orderBy('created_at','desc');
    }

    public function scopePublished($query){

          return $query->where('published_at','<=',Carbon::now());
    }

    public function scopePopular($query){

    	return $query->orderBy('view_count', 'desc');
    }

    public function dateFormatted($test=false){

           $format="d/m/Y";
           if($format)
           {
            $format="d/m/Y H:i:s";
           }
          return $this->created_at->format($format);
    }


    public function publicationLabel(){

        if(!$this->published_at){

            return '<span class="label label-warning">Draft</span>';
        }
        elseif($this->published_at && $this->published_at->isFuture()){

            return '<span class="label label-info">Schedule</span>'; 
        }else{

            return '<span class="label label-success">Published</span>'; 
        }
    }

    public function likeusers()
    {
        return $this->belongsToMany('App\User');
    }

    public function haslike($post_id,$user_id){

        $haslike=$this->likeusers()->where('post_id','=', $post_id)
                            ->where('user_id','=', $user_id)
                             ->first();


         return $haslike;
    }

}
