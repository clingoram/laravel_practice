<?php

// use App\Http\Controllers\Auth\LoginController;
// use App\Http\Controllers\Auth\RegisterController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Shopcarts\ShopcartController;
use App\Http\Controllers\Pages\PageController;
use App\Http\Controllers\Products\ProductsController;
use App\Http\Controllers\Members\MemberController;
// use App\Products;

// use App\Http\Controllers\User\RegisterController;

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

Route::prefix('/shop')->group(function () {
    // index
    Route::get('/', [ProductsController::class, 'index']);

    // register
    // Route::post('/register/{data}', [RegisterController::class, 'create']);
    Route::post('/register', [MemberController::class, 'register']);

    // login
    // Route::get('/login', [LoginController::class, '']);
});
