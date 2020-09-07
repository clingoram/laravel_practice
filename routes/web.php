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

// Route::get('/', function () {
//     // return view('welcome');

//     // 存取Model Merchandise的內容(連接到資料庫)
//     // $merchandise = App\Merchandise::all();
//     $mer = DB::table('shopcarts')->get();
//     // ->where('price',2)->value('name');
//     // $mer = select name from merchandises where price = 2;
//     return $mer;

   
// });

Route::get('/','WebsiteManagement\WebsiteManagementController@index');