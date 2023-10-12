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

    $header = config('db.header');
    $comics = config('db.comics');
    $footer = config('db.footer');
    $linkCards = config('db.linkCards');
    return view('home', compact('comics','footer','linkCards','header') );
})->name('home');
Route::get('/comic', function () {

    $header = config('db.header');
    $comics = config('db.comics');
    $footer = config('db.footer');
    $linkCards = config('db.linkCards');
    return view('comic', compact('comics','footer','linkCards','header') );
})->name('comic');
