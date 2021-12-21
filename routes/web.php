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

Route::get('/comics', function () {

    return view('comics.index');
})->name("comics.index");
Route::get('/comics/{id}', function ($id) {

    return view('comics.detail', ["id" => $id]);
})->name("comics.detail");
