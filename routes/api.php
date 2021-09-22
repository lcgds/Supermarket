<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupermarketController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// S U P E R M A R K E T

Route::post('/supermarket', [SupermarketController::class, 'store']);

Route::get('/supermarket', [SupermarketController::class, 'index']);

Route::get('/supermarket/{supermarket}', [SupermarketController::class, 'show']);

Route::put('supermarket/{supermarket}', [SupermarketController::class, 'update']);

Route::delete('supermarket/{supermarket}', [SupermarketController::class, 'destroy']);


// P R O D U C T

Route::post('/product', [ProductController::class, 'store']);

Route::get('/product', [ProductController::class, 'index']);

Route::get('/product/{product}', [ProductController::class, 'show']);

Route::put('/product/{product}', [ProductController::class, 'update']);

Route::delete('/product/{product}', [ProductController::class, 'destroy']);
