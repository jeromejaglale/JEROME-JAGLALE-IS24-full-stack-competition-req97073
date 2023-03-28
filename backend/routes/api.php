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

// GET endpoints
Route::get('/products', function () {
	return Product::all();
});

Route::get('/products/{product:product_id}', function (Product $product) {
	return $product;
});

// POST endpoint
Route::post('/products', function (Request $request) {
	$product_data = $request->json()->all();

	$product = Product::create($product_data);

	return $product;
});

// PUT endpoint
Route::put('/products/{product_id}', function ($product_id, Request $request) {
	$product_data = $request->json()->all();

	$product = Product::updateOrCreate(
	    ['product_id' => $product_id],
	    $product_data
	);

	return $product;
});

// DELETE endpoint
Route::delete('/products/{product_id}', function ($product_id) {
	$product = Product::where('product_id', $product_id)->first();
	
	if($product == null) {
		abort(404);
	}
	
	$product->delete();
});
