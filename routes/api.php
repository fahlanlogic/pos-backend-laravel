<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
  return $request->user();
})->middleware('auth:sanctum');

Route::get('/products', function () {
  return response()->json([
    'products' => [
      [
        'id' => 1,
        'name' => 'Product 1',
        'price' => 10.99,
      ],
      [
        'id' => 2,
        'name' => 'Product 2',
        'price' => 19.99,
      ],
      [
        'id' => 3,
        'name' => 'Product 3',
        'price' => 5.99,
      ],
    ]
  ]);
});
