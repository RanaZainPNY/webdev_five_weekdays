<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    function index()
    {
        // $products = Product::orderBy('created_at', 'DESC')->get();
        $products = Product::all();
        return view('admin.list', [
            'products' => $products
        ]);
    }
    function create()
    {
        return view('admin.create');
    }

    function store(Request $request)
    {
        // dump($request->name);
        // die();
        $product = new Product();
        $product->name = $request->name;
        $product->sku = $request->sku;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->save();
        return redirect()->route('products.index');
    }

    function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('products.index');
    }
}
