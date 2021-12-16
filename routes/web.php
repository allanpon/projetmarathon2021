<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SliderController;
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

Route::any('/', [HomeController::class, 'index'])->name('home');

Route::resource('slides', 'App\Http\Controllers\SliderController');

Route::resource("series", "App\Http\Controllers\SerieController");
//Route::resource("user", "App\Http\Controllers\UserController");
Route::get('/user',function (){
    return (new App\Http\Controllers\UserController)->profile();
})->name('user');

Route::patch('/user/{id}','App\Http\Controllers\UserController@valider')->name('valide');
//Route::post("/login", );
