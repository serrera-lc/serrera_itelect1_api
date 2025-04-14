<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the products.
     */
    public function index()
    {
        //
        return response()->json(Product::paginate(15), 200);
    }

    /**
     * Store a newly created product in storage.
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->category_id = $request->category_id; 
        $product->save();
    
        return response()->json([
            'message' => "Product successfully saved",
            'product' => $product

        ], 201);
    }

    /**
     * Display the specified product.
     */    public function show(string $id)
    {
        //

        $product = Product::find($id);

        return $product
            ? response()->json($product, 200)
            : response()->json(['message' => 'Product not found'], 404);
    }

    /**
     * Update the specified product in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $product = Product::find($id);
        if (!$product) return response()->json(['message' => 'Product not found'], 404);

        $product->name = $request->name;
        $product->price = $request->price;
        $product->category_id = $request->category_id;
        $product->save();
    
        return response()->json([
            'message' => 'Product successfully updated',
            'product' => $product
        ], 200);
    }

    /**
     * Remove the specified product from storage.
     */
    public function destroy(string $id)
    {
        //
        $product = Product::find($id);
        if(!$product) return response() ->json(['message' => 'Product not found'], 404);

        $product->delete();
        return response()->json(['message' => 'Product deleted'], 200); 

    }
}