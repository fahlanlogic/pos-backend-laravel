<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return response()->json([
            [
                'success' => true,
                'message' => 'Operation Success',
                'data' => $products,
            ],
        ]);
    }

    public function store(StoreProductRequest $request)
    {
        $dto = $request->validated(); // memakai rules dari /Http/Request/StoreProductRequest untuk DTO
        $product = Product::create($dto); // ambil table Product dan create berdasarkan dto

        return response()->json([
            'success' => true,
            'message' => 'Operation Success',
            'data' => $product,
        ]);
    }

    public function show(Product $product)
    {
        return response()->json([
            'success' => true,
            'message' => 'Operation Success',
            'data' => $product,
        ]);
    }

    public function update(StoreProductRequest $request, Product $product)
    {
        $dto = $request->validated(); // ambil product yang tervalidasi
        $product->update($dto); // ambil 'id' product dan kirim product diatas ke database (php sudah auto binding seperti hal nya findIdAndUpdate dan auto error jika tidak ada)

        return response()->json([
            'success' => true,
            'message' => 'Operation Success',
            'data' => $product,
        ]);
    }

    public function destroy(Product $product)
    {
        return response()->json([
            'success' => true,
            'message' => 'Operation Success',
            'data' => $product->delete($product),
        ]);
    }
}
