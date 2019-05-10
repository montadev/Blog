<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostType extends Model
{
    

    protected $fillable = ['type'];
     public function posts(){
     	return $this->hasMany('App\Post', 'post_types_id');
     }
    
}
