<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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
Route::get('/home',function(){
    return view('home');
});
Route::get('/admin', function () {
    return view('adminn.index');
});
Route::controller(CategoriesController::class)->group(function () {
    Route::get('/admin/category', 'index')->name('list_category');
    Route::match(['get', 'post'], '/admin/category/add', [CategoriesController::class, 'add_category'])->name('add_category');
    Route::match(['get', 'post'], '/admin/category/edit/{id}', [CategoriesController::class, 'edit'])->name('edit_category');
    Route::get('/admin/category/delete/{id}', [CategoriesController::class, 'delete'])->name('delete_category');
});
Route::controller(ProductController::class)->group(function () {
    Route::get('/admin/product', 'index')->name('list_product');
    Route::match(['get','post'], '/admin/product/add', [ProductController::class, 'add'])->name('add_product');
    Route::match(['get','post'],'/admin/product/edit/{id}',[ProductController::class,'edit'])->name('edit_product');
    Route::get('/admin/product/delete/{id}', [ProductController::class, 'delete'])->name('delete_product');
});
Route::controller(BrandController::class)->group(function(){
    Route::get('/admin/brand', 'index')->name('list_brand');
    Route::match(['get', 'post'], '/admin/brand/add', [BrandController::class, 'add'])->name('add_brand');
    Route::match(['get','post'], 'admin/brand/edit/{id}', [BrandController::class, 'edit'])->name('edit_brand');
    Route::get('/admin/brand/delete/{id}', [BrandController::class, 'delete'])->name('delete_brand');
});
Route::controller(UserController::class)->group(function(){
    Route::get('/admin/user', 'index')->name('list_user');
    Route::match(['get', 'post'], 'admin/user/add', [UserController::class, 'add'])->name('add_user');
    Route::match(['get', 'post'], 'admin/user/edit/{id}', [UserController::class, 'edit'])->name('edit_user');
    Route::get('/admin/user/delete/{id}', [UserController::class, 'delete'])->name('delete_user');
});
