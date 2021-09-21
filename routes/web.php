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

//Route::get('/', function () {
   // return view('welcome');
//});

//Route::get('/dashboard', function () {
   //// return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

//Route::get('/posts', function(){
  //echo" hello Laravel ";

//});

//Route::get('/search', function(){
  // return view ('search');
//});

Route::get('posts', 'MessageController@showAll');

Route::post('/create', 'MessageController@create');

Route::get('/posts/{id}', 'MessageController@view');  

Route::delete('/posts/{id}', 'MessageController@delete');

Route::get('/inc.search/', 'MessageController@search')->name('inc.search');