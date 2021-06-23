<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;

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
    return view('dashboard');
});


// Using PHP callable syntax...
// Route::get('/', [ContcatController::class, 'index'])->name('contcat.index');
Route::get('category.index', [CategoryController::class, 'index'])->name('category.index');
Route::post('category.store', [CategoryController::class, 'store'])->name('category.store');
Route::get('category.create', [CategoryController::class, 'create'])->name('category.create');
Route::get('category.edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
Route::put('category.update/{id}', [CategoryController::class, 'update'])->name('category.update');
Route::delete('category.destroy/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');

Route::get('order.index', [OrderController::class, 'index'])->name('order.index');
Route::post('order.store', [OrderController::class, 'store'])->name('order.store');
Route::get('order.create', [OrderController::class, 'create'])->name('order.create');
Route::get('order.edit/{id}', [OrderController::class, 'edit'])->name('order.edit');
Route::put('order.update/{id}', [OrderController::class, 'update'])->name('order.update');
Route::delete('order.destroy/{id}', [OrderController::class, 'destroy'])->name('order.destroy');

Route::get('product.index', [ProductController::class, 'index'])->name('product.index');
Route::post('product.store', [ProductController::class, 'store'])->name('product.store');
Route::get('product.create', [ProductController::class, 'create'])->name('product.create');
Route::get('product.edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
Route::put('product.update/{id}', [ProductController::class, 'update'])->name('product.update');
Route::delete('product.destroy/{id}', [ProductController::class, 'destroy'])->name('product.destroy');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
