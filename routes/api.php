<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::prefix('products')->group(function () {
    Route::get('/{id}', [ProductController::class, 'show']);
    Route::get('', [ProductController::class, 'index']);
    Route::post('', [ProductController::class, 'store']);
});
Route::prefix('categories')->group(function () {
    Route::get('', [CategoryController::class, 'index']);
    Route::post('', [CategoryController::class, 'store']);
});

Route::prefix('users')->group(function () {
    Route::get('', [UserController::class, 'index']);
    Route::post('', [UserController::class, 'store']);
});

Route::post("sign_in", [AuthController::class, 'signIn']);
Route::post("log_out", [AuthController::class, 'logOut']);
