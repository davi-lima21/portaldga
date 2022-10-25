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
Route::get('postuser/{id_user}', "App\Http\Controllers\PostController@index_user")->name("post_user.index");
Route::post('post/store', "App\Http\Controllers\PostController@store")->name("post.store");


Route::get('tutorial/{id}', "App\Http\Controllers\TutorialUserController@show")->name("tutorial.show");
Route::get('tutorial', "App\Http\Controllers\TutorialUserController@index")->name("tutorial.index");




Route::get('blog', "App\Http\Controllers\BlogController@index")->name("blog.index");
Route::get('blog/create', "App\Http\Controllers\BlogController@create")->name("blog.create");
Route::get('blog/{id}', "App\Http\Controllers\BlogController@show")->name("blog.show");

Route::post('blog/store', "App\Http\Controllers\BlogController@store")->name("blog.store");


Route::get('userinfo/create', "App\Http\Controllers\UserInfoController@create")->name("userinfo.create");
Route::get('userinfo/{id}', "App\Http\Controllers\UserInfoController@show")->name("userinfo.show");
Route::get('userinfo/{id}/edit', "App\Http\Controllers\UserInfoController@edit")->name("userinfo.edit");
Route::post('userinfo', "App\Http\Controllers\UserInfoController@store")->name("userinfo.store");
Route::put('userinfo/{id}', "App\Http\Controllers\UserInfoController@update")->name("userinfo.update");
Route::delete('userinfo/{id}', "App\Http\Controllers\UserInfoController@destroy")->name("userinfo.destroy");


//Route::get('user/login', "App\Http\Controllers\UserController@login")->name("user.login");

Route::post('interacaopost/store', "App\Http\Controllers\InteracaoPostController@store")->name("interacao_post.store");

Route::prefix('admin')->group(function () {
    // Dashboard route
    Route::get('/', 'App\Http\Controllers\AdminController@index')->name('admin.dashboard');

    // Login routes
    Route::get('/login', 'App\Http\Controllers\Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'App\Http\Controllers\Auth\AdminLoginController@login')->name('admin.login.submit');

    // Logout route
    Route::post('/logout', 'App\Http\Controllers\Auth\AdminLoginController@logout')->name('admin.logout');

    // Register routes
    // Route::get('/register', 'App\Http\Controllers\Auth\AdminRegisterController@showRegistrationForm')->name('admin.register');
    // Route::post('/register', 'App\Http\Controllers\Auth\AdminRegisterController@register')->name('admin.register.submit');

    Route::get('tipopost', "App\Http\Controllers\TipoPostController@index")->name("tipopost.index");
    
    Route::get('tipopost/create', "App\Http\Controllers\TipoPostController@create")->name("tipopost.create");
    
    Route::post('tipopost/store', "App\Http\Controllers\TipoPostController@store")->name("tipopost.store");


    Route::get('tutorial/create', "App\Http\Controllers\TutorialController@create")->name("tutorial.create");
    Route::post('tutorial/store', "App\Http\Controllers\TutorialController@store")->name("tutorial.store");

    // Password reset routes
    Route::get('/password/reset', 'App\Http\Controllers\Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/email', 'App\Http\Controllers\Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset/{token}', 'App\Http\Controllers\Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::post('/password/reset', 'App\Http\Controllers\Auth\AdminResetPasswordController@reset')->name('admin.password.update');
});

Auth::routes();

Route::get('/home', "App\Http\Controllers\PostController@index")->name('home');
