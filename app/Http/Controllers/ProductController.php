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
        $dto = $request->validated();
        $product = Product::create($dto);

        return response()->json([
            'success' => true,
            'message' => 'Operation Success',
            'data' => $product,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return response()->json([
            'success' => true,
            'message' => 'Operation Success',
            'data' => $product,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
