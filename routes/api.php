<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// namespace App\Http\Controllers;
// use App\Http\Controllers\Shopcarts\ShopcartController;
// use App\ShopcartController;

use App\Http\Controllers\ShopcartController;
use App\Http\Controllers\PageController;
// use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// 首頁
Route::get('/home','PageController@index');

Route::prefix('/product')->group(function() {
    Route::get('/','MerchandiseController@index');
});

// Route::get('cart',[ShopcartController::class,'show']);
// Route::get('cart' ,'App\Http\Controllers\Shopcarts\ShopcartController@show');


Route::prefix('/cart')->group(function() {
    Route::get('/{id}',[ShopcartController::class,'show']);
    // Route::get('/{id}','ShopcartController@show');
    Route::post('/store',[ShopcartController::class,'store']);
    // Route::put('/{id}',[ShopcartController::class,'update']);
    Route::post('/{id}',[ShopcartController::class,'destory']);
});