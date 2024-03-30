<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return Product::all();
    }

    public function store(Request $request)
    {
        $product = Product::create([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'location' => $request->input('location')
        ]);

        return $product;
    }

    public function show($id)
    {
        return Product::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        
        $product->update([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'location' => $request->input('location')
        ]);
        
        return response("Product updated successfully", 200);
        // return response()->json([
        //     'message' => 'Product updated successfully',
        //     'product' => $product
        // ], Response::HTTP_OK);
    }

    public function destroy($id)
    {   
        $product = Product::findOrFail($id);
        $product->delete();
        return response()->json(['message' => 'Product deleted successfully']);
    }
}
