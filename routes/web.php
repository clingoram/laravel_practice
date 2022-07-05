<?php

use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\Auth;

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

// Auth::routes();

// Route::get('/', 'PageController@index');


// Route::resource('product', 'ProductsController');
// Route::resource('cart', 'ShopcartController');

// // home
// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
  // 引導至views/index.blade
  return view('index');
});

// Route::view('/welcome', 'welcome');
