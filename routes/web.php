<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/contact', function () {
//     return view('contact');
// });

Route::view("about",'about');
Route::view("contact",'contact');



// Route::get("path","controller file");
// Routes::get("users","Users@index");
Route::get("users/{user}",[Users::class,'index']);