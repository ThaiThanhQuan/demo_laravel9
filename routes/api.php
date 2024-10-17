<?php

use App\Http\Controllers\Api\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::group(['prefix' => 'categories'], function() {
    Route::get('/', [CategoryController::class,'categories']);
    Route::get('/{id}', [CategoryController::class, 'category']);
});
