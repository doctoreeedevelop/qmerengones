<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\CategoryController;
use App\Http\Controllers\API\ProductController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('category', 'App\Http\Controllers\API\CategoryController')->names('api.category');

Route::apiResource('product', 'App\Http\Controllers\API\ProductController')->names('api.product');
Route::delete('/eliminarimagen/{id}', [ProductController::class, 'eliminarimagen'])->name('api.eliminarimagen');
Route::delete('/eliminarcat/{id}', [CategoryController::class, 'destroy'])->name('api.eliminarcat');
Route::delete('/eliminarprod/{id}', [ProductController::class, 'destroy'])->name('api.eliminarprod');
Route::apiResource( 'apicarrito',  'App\Http\Controllers\API\CartController')->names('api.carrito');


