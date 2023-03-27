<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Product;

// health endpoint
Route::get('/health', function () {
	return response()->json([
	    'status' => 'available',
	]);
});

// GET endpoint
Route::get('/product', function () {
	return Product::all();
});
