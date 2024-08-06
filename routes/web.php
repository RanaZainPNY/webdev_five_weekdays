<?php

use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

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
