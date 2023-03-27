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
Route::get('/products', function () {
	return Product::all();
});

// DELETE endpoint
Route::delete('/products/{product_id}', function ($product_id) {
	$product = Product::where('product_id', $product_id)->first();
	
	if($product == null) {
		abort(404);
	}
	
	$product->delete();
});
