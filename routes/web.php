<?php

use App\Http\Controllers\SerieController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
Route::get('/cards', function(){
    return (new App\Http\Controllers\Controller)->affiche();
});

Route::resource("series", "App\Http\Controllers\SerieController");
//Route::resource("user", "App\Http\Controllers\UserController");
Route::get('/user',function (){
    return view('user.profile');
});
//Route::post("/login", );
