<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    $products = config('products');
    return view('home', compact('products'));
})->name('home');

Route::get('/Uomo', function () {
    return view('men');
})->name('men');

Route::get('/Donna', function () {
    return view('woman');
})->name('woman');

Route::get('/Bambino', function () {
    return view('kids');
})->name('kids');
