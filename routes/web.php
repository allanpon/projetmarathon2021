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

Route::resource("series", "App\Http\Controllers\SerieController");
Route::get('/user',function (){
    return (new App\Http\Controllers\UserController)->profile();
})->name('user');

Route::patch('/user/seen/{id}','App\Http\Controllers\UserController@seen')->name('seen');

Route::patch('/user/{id}','App\Http\Controllers\CommentController@valider')->name('valide');
Route::patch('/comment/del/{id}','App\Http\Controllers\CommentController@delete')->name('delete');
//Route::post("/login", );
