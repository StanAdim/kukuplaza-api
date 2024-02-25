<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
*/

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {return $request->user();});

Route::get('/shop/products',[ProductController::class, 'index']);
Route::post('/shop/product',[ProductController::class, 'retriveProduct']);
Route::post('/shop/search/product',[ProductController::class, 'searchProduct']);
Route::post('/set/order',[OrderController::class, 'setOrder']);



Route::get('/tanzania-regions',[AppController::class, 'getRegions']);
Route::get('/region-districts/{targetRegion}',[AppController::class, 'getDistrict']);