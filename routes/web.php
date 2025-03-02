<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController; // Import the ProductController

// Default route for the welcome page
Route::get('/', function () {
    return view('welcome');
});

// Resource route for ProductController
Route::resource('products', ProductController::class);