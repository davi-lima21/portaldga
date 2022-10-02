<?php

use Illuminate\Support\Facades\Route;

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
Route::post('post/store', "App\Http\Controllers\PostController@store")->name("post.store");

Route::prefix('/admin')->group(function(){
    Route::get('tipopost/index', "App\Http\Controllers\TipoPostController@index")->name("tipopost.index");
    
    Route::get('tipopost/create', "App\Http\Controllers\TipoPostController@create")->name("tipopost.create");
    
    Route::post('tipopost/store', "App\Http\Controllers\TipoPostController@store")->name("tipopost.store");
   
});