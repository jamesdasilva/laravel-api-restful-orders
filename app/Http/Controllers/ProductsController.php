<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    public function index() {
        $products = Product::All();
        return response()->json($products);
    }

    public function show($id)
    {
        $product = Product::find($id);

        if(!$product) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        return response()->json($product);
    }

    public function store(Request $request)
    {
        $product = new Product();
        $product->fill($request->all());
        $product->save();

        return response()->json($product, 201);
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        if(!$product) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $product->fill($request->all());
        $product->save();

        return response()->json($product);
    }

    public function destroy($id)
    {
        $product = Product::find($id);

        if(!$product) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $product->delete();
    }
}
