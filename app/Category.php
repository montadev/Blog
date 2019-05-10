<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
class Category extends Model
{
    use Sluggable;

    protected $fillable = ['title','slug','created_at','updated_at'];

      public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function posts()
    {
        return $this->hasMany('App\Post');
    }

    public function getRouteKeyName(){

    	return 'slug';
    }

    public function dateFormatted($test=false){

           $format="d/m/Y";
           if($format)
           {
            $format="d/m/Y H:i:s";
           }
          return $this->created_at->format($format);
    }
}
