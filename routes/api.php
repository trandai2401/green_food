<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartItemController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\UserController;
use App\Models\CartItem;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

Route::prefix('cart_item')->group(function () {
    Route::get('', [CartItemController::class, 'index']);
    Route::post('', [CartItemController::class, 'store']);
    Route::patch('/{cartItemId}', [CartItemController::class, 'update']);
    Route::delete('/{cartItemId}', [CartItemController::class, 'destroy']);
});

Route::prefix('products')->group(function () {
    Route::get('/{id}', [ProductController::class, 'show'])->withoutMiddleware('auth:api');
    Route::get('', [ProductController::class, 'index'])->withoutMiddleware('auth:api');
    Route::post('', [ProductController::class, 'store']);
});
Route::prefix('categories')->group(function () {
    Route::get('', [CategoryController::class, 'index'])->withoutMiddleware('auth:api');;
    Route::post('', [CategoryController::class, 'store']);
});

Route::prefix('users')->group(function () {
    Route::get('', [UserController::class, 'index']);
    Route::post('', [UserController::class, 'store'])->withoutMiddleware('auth:api');;
});

Route::post("sign_in", [AuthController::class, 'signIn'])->withoutMiddleware('auth:api');
Route::post("log_out", [AuthController::class, 'logOut']);
Route::get("check", [AuthController::class, 'check'])->withoutMiddleware('auth:api');

Route::prefix('invoices')->group(function () {
    Route::get('', [InvoiceController::class, 'index']);
    Route::post('', [InvoiceController::class, 'store']);
});

Route::prefix('reviews')->group(function () {
    Route::get('search', [ReviewController::class, 'search'])->withoutMiddleware('auth:api');
    Route::get('check', [ReviewController::class, 'check']);

    Route::post('', [ReviewController::class, 'store']);
});

Route::get('search', [SearchController::class, 'index'])->withoutMiddleware('auth:api');
Route::get('callback', [SocialController::class, 'callback'])->withoutMiddleware('auth:api');
