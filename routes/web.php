<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', [ProductController::class, 'index']);

Route::get('/events/create-product', [ProductController::class, 'create']);

Route::post('/events', [ProductController::class, 'store']);