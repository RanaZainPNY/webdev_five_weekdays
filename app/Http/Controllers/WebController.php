<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class WebController extends Controller
{
    //
    public function index()
    {
        return view('index');
    }
    public function home()
    {
        // making use of model to get data from database
        $products = Product::all();
        
        //
        return view('home', [
            'products' => $products
        ]);
    }
    public function about()
    {
        return view('about');
    }

}
