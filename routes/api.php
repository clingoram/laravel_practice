<?php

// use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ShopcartController;
// use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;

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
    Route::get('', [ProductsController::class, 'index']);
    // register
    // Route::post('/register/{data}', [RegisterController::class, 'create']);
    Route::post('/register/{data}', [UserController::class, 'register']);

    // login
    // Route::get('/login', [LoginController::class, '']);
});
