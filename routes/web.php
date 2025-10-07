<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;


Route::prefix('api')->group(function () {
    Route::apiResource('products', ProductController::class);
    Route::apiResource('categories', CategoryController::class);

    Route::get('/categories/active/with-products', [CategoryController::class, 'activeWithProducts']);
    
    Route::get('/test', function() {
        return response()->json(['message' => 'API funcionando']);
    });
});