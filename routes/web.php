<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
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
Route::get('/home', function () {
    return view('child.home');
})->name('home');
Route::get('/create_product', function () {
    return view('child.create_product');
})->name('create_product');
Route::get('/create', function () {
    return view('category.create');
})->name('create');

Route::resource('/category',CategoryController::class);