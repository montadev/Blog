<?php

namespace App\Providers;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Category;
use App\Post;
use Carbon\Carbon;
use App\Info;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
         Schema::defaultStringLength(191);
         
         $now=Carbon::now()->format('Y-m-d');
       
         $events=Info::where('date','=',$now)->get();   

        $categories=Category::with('posts')->get();
        $populars=Post::Published()
        ->popular()
        ->take(3)
        ->where('validate','=',1)
        ->get();      
        View::share(['categories'=>$categories,'populars'=>$populars,'events'=>$events]);
        
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
