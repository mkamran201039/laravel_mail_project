<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Services\ProductService;

class ProductController extends Controller
{

    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }



    public function index()
    {
        return Product::all();
    }


   
    public function store(Request $request)
    {
        return $this->productService->createProduct($request); // using service pattern
    }




    public function show($id)
    {
        return Product::findOrFail($id);
    }


    
    public function update(Request $request, $id)
    {
        return response()->json($this->productService->updateProduct($request, $id)); // using service patteern
    }

  
  
    public function destroy($id)
    {
        return response()->json($this->productService->deleteProduct($id)); // usng service pattern
    }


}
