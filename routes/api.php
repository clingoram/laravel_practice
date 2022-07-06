<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ShopcartController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Products\ProductsController;
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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// // 首頁
// // Route::get('/home','PageController@index');
// Route::get('/home', [PageController::class, 'index']);


// // 上傳商品頁面
// Route::prefix('/product')->group(function () {
//     Route::get('/', 'ProductsController@index');
//     Route::post('/store', 'ProductsController@store');
// });

// Route::get('cart', [ShopcartController::class, 'show']);
// // Route::get('cart' ,'App\Http\Controllers\Shopcarts\ShopcartController@show');

// // 購物車
// Route::prefix('/cart')->group(function () {
//     Route::get('/{id}', [ShopcartController::class, 'show']);
//     // Route::get('/{id}','ShopcartController@show');
//     Route::post('/store', [ShopcartController::class, 'store']);
//     // Route::put('/{id}',[ShopcartController::class,'update']);
//     Route::post('/{id}', [ShopcartController::class, 'destory']);
// });


Route::prefix('/shop')->group(function () {
    Route::get('', [ProductsController::class, 'index']);
});
