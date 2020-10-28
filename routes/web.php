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
    return view('pages.home.master');
})->name('home');
Route::get('/articles', function() {
   return view('pages.articles.index');
})->name('articles');

Route::get('/articles/some-article', function() {
   return view('pages.articles.show');
})->name('articles.show');


