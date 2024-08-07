<?php

use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Route::get('/', function () {
//     // return view('welcome');
//     // return view('master');
//     return view('index');
// });

Route::get('/', [WebController::class, 'index']);
Route::get('/home', [WebController::class, 'home']);
Route::get('/about', [WebController::class, 'about']);

// Route::get("/home", function () {
//     return view('home');
// });

// Route::get("/about", function () {
//     return view('about');
// });

// Routes for admin views
Route::get("/admin/products", [ProductController::class, 'index'])->name("products.index");
Route::get("/admin/products/create", [ProductController::class, 'create'])->name("products.create");
Route::post("/admin/products", [ProductController::class, 'store'])->name("products.store");

Route::delete('/admin/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');