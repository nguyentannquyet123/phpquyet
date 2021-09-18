<?php

use App\Http\Controllers\Admin\manageProductController;
use App\Http\Controllers\content\ShowProductController;
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



Route::get('/', [ShowProductController::class, 'home'])->name('showproduct');
Route::get('admin', [ShowProductController::class, 'admin']);
Route::get('product/categories/{id}', [ShowProductController::class, 'productCategories'])->name('product-categories');
Route::get('product/brands/{id}', [ShowProductController::class, 'productBrands'])->name('product-Brands');

Route::get('/Admin', [manageProductController::class, 'showproduct']);
