<?php
use App\config;
use App\Role;
use App\Post;
use App\User;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


 
Route::get('/','BlogController@index')->name('index');
Route::post('/','BlogController@index')->name('index');
Route::get('blog/{post}','BlogController@showpost')->name('showpost');




Route::get('/Qui_Sommes_nous','BlogController@About_us')->name('About_us');
Route::get('/Gouvernance','BlogController@Gouvernance')->name('Gouvernance');
Route::get('/Membres','BlogController@Membres')->name('Membres');




Route::get('category/{category}','BlogController@category')->name('category');
Auth::routes();

Route::get('/home', 'Backend\HomeController@index')->name('home');

Route::get('logout','Backend\backendcontroller@logout')->name('logout');


Route::resource('/backend/blog','Backend\BlogController');
Route::resource('/backend/categories','Backend\CategoryController');
Route::resource('/backend/users','Backend\UsersController');


Route::get('backend/trashed','Backend\BlogController@trashed')->name('blog.Trashed');



Route::get('backend/restore/{id?}','Backend\BlogController@restore')->name('blog.restore');
Route::get('backend/permanatly/{id?}','Backend\BlogController@permanatly')->name('blog.deleteperma');


Route::get('backend/valide/{id?}','Backend\BlogController@valide')->name('valide');
Route::get('backend/rejete/{id?}','Backend\BlogController@rejete')->name('rejete');

/**** route for pub ***/
Route::get('backend/pub/','Backend\BlogController@createpub')->name('blog.pub');
Route::post('backend/pub/','Backend\BlogController@storepub')->name('blog.pub');

Route::get('backend/pub/index','Backend\BlogController@listofpub')->name('blog.pub.index');
Route::get('backend/pub/delete/{id}','Backend\BlogController@deletepub')->name('blog.pub.delete');
Route::get('backend/pub/update/{id}','Backend\BlogController@updatepub')->name('blog.pub.update');
Route::post('backend/pub/updatepubb/{id}','Backend\BlogController@updatepubb')->name('blog.pub.updatepubb');

/*** end route ****/
Route::get('/backend/listinfo','Backend\BlogController@listinfo')->name('blog.infolist');
Route::get('/backend/info','Backend\BlogController@Info')->name('blog.info');
Route::post('/backend/info','Backend\BlogController@storeinfo')->name('blog.info');
Route::get('/backend/info/delete/{id?}','Backend\BlogController@Infodelete')->name('info.delete');
Route::get('/backend/info/update/{id?}','Backend\BlogController@Infoupdate')->name('info.update');

Route::post('/backend/info/update/store/{id?}','Backend\BlogController@Infoupdatestore')->name('info.store');
Route::post('/add/comment','commentController@addcomment')->name('store.comment');


Route::post('/login/abonnes', 'LoginController@login')->name('login.abbonne');

Route::get('/login/logout', 'LoginController@logout')->name('login.logout');

Route::post('/inscription/abonnes', 'LoginController@inscription')->name('inscription.abbonne');



/* like ad dislike system **********/


Route::post('/like','BlogController@Like')->name('add.like');

Route::post('/dislike','BlogController@dislike')->name('add.dislike');
/*
Route::get('/email','commentController@mail');

*/







