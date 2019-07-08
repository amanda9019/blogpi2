<?php

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


/*
-- Exemplos --

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    //return view('welcome');
    return '<h1>Hello World</h1>';
});

Route::get('/users/{id}/{name}', function ($id, $name) {
    return 'Este é o usuário '.$name.' com o id '.$id.'.';
});
_______________
*/

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/laravel', 'PagesController@services');

/*
Route::get('/about', function () {  //Cria uma rota para uma página Sobre
    return view('pages.about');
});*/

Route::resource('posts', 'PostsController');
Route::get('/posts/create', 'PostsController@create')->name('post.create');
Route::post('/posts/store', 'PostsController@store')->name('post.store');
Route::post('/comments/store', 'CommentsController@store')->name('comment.store');
//Route::post('/comments/destroy', 'CommentsController@destroy')->name('comment.destroy');
Route::resource('comments', 'CommentsController');


//Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
