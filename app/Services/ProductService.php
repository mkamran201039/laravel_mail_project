<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductService
{
    public function createProduct(Request $request)
    {
        return Product::create([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'location' => $request->input('location')
        ]);
    }

    

    public function updateProduct(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        
        $product->update([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'location' => $request->input('location')
        ]);

        return "Product updated successfully";
        
        // return response()->json([
        //     'message' => 'Product updated successfully',
        //     'product' => $product
        // ], Response::HTTP_OK);
    }




    public function deleteProduct($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return "Product deleted successfully";
        // You can also return a JSON response if needed
        // return response()->json(['message' => 'Product deleted successfully']);
    }





}
