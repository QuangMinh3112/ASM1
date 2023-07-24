<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductController;
use App\Models\Category;
use App\Models\Product;
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
Route::get('/admin', function () {
    return view('adminn.index');
});
Route::controller(CategoriesController::class)->group(function () {
    Route::get('/admin/category', 'index')->name('list_category');
    Route::match(['get', 'post'], '/admin/category/add', [CategoriesController::class, 'add'])->name('add_category');
    Route::match(['get', 'post'], '/admin/category/edit/{id}', [CategoriesController::class, 'edit'])->name('edit_category');
    Route::get('/admin/category/delete/{id}', [CategoriesController::class, 'delete'])->name('delete_category');
});
Route::controller(ProductController::class)->group(function () {
    Route::get('/admin/product', 'index')->name('list_product');
    Route::match(['get','post'], '/admin/product/add', [ProductController::class, 'add'])->name('add_product');
    Route::match(['get','post'],'/admin/product/edit/{id}',[ProductController::class,'edit'])->name('edit_product');
    Route::get('/admin/product/delete/{id}', [ProductController::class, 'delete'])->name('delete_product');
});
