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


// 順序:
// user向Route發出請求
// Route決定要哪個Controller做動作
// Controller從Model拿資料。Model是PHP的物件，負責跟資料庫的互動(拿取資料)
// Controller把從Model那裏拿到的資料給View
// View把資料編成Blade型態的HTML，之後顯示在瀏覽器讓user看到

// Route::get('/', function () {
//     return view('index');
// });

// -----------------------------------------------
// call controllers:
// Route::http request('uri',controller's name@which function);
// ------------------------------------------------
Auth::routes();

// Route::get('/','WebsiteManagementController@index');
Route::get('/','MerchandiseController@index');
// home
Route::get('/home', 'HomeController@index')->name('home');