<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    //
    function index()
    {
        // $products = Product::orderBy('created_at', 'DESC')->get();
        $products = Product::all();
        // embedding products data in  list view
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
        $product = new Product();
        $product->name = $request->name;
        $product->sku = $request->sku;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->save();

        if ($request->image != "") {
            // Here we will Save Image Data 
            $image = $request->image;
            $ext = $image->getClientOriginalExtension();
            $imageName = time() . '.' . $ext; // Unique Image Name

            // save image to products directory
            $image->move(public_path('uploads/products'), $imageName);

            // save image in database
            $product->image = $imageName;
            $product->save();
        }

        return redirect()->route('products.index');
    }

    function destroy($id)
    {
        $product = Product::findOrFail($id);

        // to remove image file from directory
        if ($product->image != "") {
            // delete associated image file
            File::delete(public_path('uploads/products/' . $product->image));
        }
        // to remove product entry from the database
        $product->delete();
        return redirect()->route('products.index');
    }
    public function edit($id)
    {
        // get the associated product data
        $product = Product::findOrFail($id);
        // edit form
        return view('admin.edit', [
            'product' => $product
        ]);
    }

    public function update($id, Request $request)
    {
        // get the original product from database
        $product = Product::findOrFail($id);
        // update
        $product->name = $request->name;
        $product->sku = $request->sku;
        $product->price = $request->price;
        $product->description = $request->description;
        // save
        $product->save();

        if ($request->image != "") {
            // delete old image
            File::delete(public_path('uploads/products/' . $product->image));

            // Here we will Save Image Data 
            $image = $request->image;
            $ext = $image->getClientOriginalExtension();
            $imageName = time() . '.' . $ext; // Unique Image Name

            // save image to products directory
            $image->move(public_path('uploads/products'), $imageName);

            // save image in database
            $product->image = $imageName;
            $product->save();
        }


        // redirect to the list view
        return redirect()->route('products.index');

    }
}
