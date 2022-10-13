<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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


Route::get('/', "App\Http\Controllers\PostController@index")->name('welcome.home');


Route::get('post/create', "App\Http\Controllers\PostController@create")->name("post.create");
Route::get('post/{id}', "App\Http\Controllers\PostController@show")->name("post.show");

Route::delete('post/{id}', "App\Http\Controllers\PostController@destroy")->name("post.destroy");
Route::put('post/{id}', "App\Http\Controllers\PostController@update")->name("post.update");

Route::get('post/{id}/edit', "App\Http\Controllers\PostController@edit")->name("post.edit");
Route::get('postmy/{id_user}', "App\Http\Controllers\PostController@index_my")->name("post_my.index");
Route::get('postmyshow/{id}', "App\Http\Controllers\PostController@show_my")->name("post_my.show");
Route::post('post/store', "App\Http\Controllers\PostController@store")->name("post.store");



//Route::get('user/login', "App\Http\Controllers\UserController@login")->name("user.login");

Route::post('interacaopost/store', "App\Http\Controllers\InteracaoPostController@store")->name("interacao_post.store");

Route::prefix('/admin')->group(function(){
    Route::get('tipopost/index', "App\Http\Controllers\TipoPostController@index")->name("tipopost.index");
    
    Route::get('tipopost/create', "App\Http\Controllers\TipoPostController@create")->name("tipopost.create");
    
    Route::post('tipopost/store', "App\Http\Controllers\TipoPostController@store")->name("tipopost.store");


    Route::get('tutorial/create', "App\Http\Controllers\TutorialController@create")->name("tutorial.create");
    Route::post('tutorial/store', "App\Http\Controllers\TutorialController@store")->name("tutorial.store");
   
});

Auth::routes();

Route::get('/home', "App\Http\Controllers\PostController@index")->name('home');
