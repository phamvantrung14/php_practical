<?php

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
Route::get("/list-book","BookController@index")->name("index");
Route::get("/new-book","BookController@new")->name("new-book");
Route::post("/save-book","BookController@save")->name("save-book");
Route::post("/searh-title","BookController@search")->name("search");
