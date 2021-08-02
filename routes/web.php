<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\testController;
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

// Route::get('/', function () {
//     return view('product.index');
// });

Route::get('/',[ProductController::class, 'index']);

Route::get('product/trash',[ProductController::class , 'trashedProducts'])->name('trash.products');
Route::get('product/restore/{id}',[ProductController::class , 'restoreProduct'])->name('product.back');
Route::get('product/force/delete/{id}',[ProductController::class , 'forceDelete'])->name('force.delete');


Route::resource('product',ProductController::class);

Route::get('product/soft/delete/{id}',[ProductController::class , 'softDelete'])->name('soft.delete');


// Route::get
// Route::get('trash',[ProductController::class , 'trashedProducts']);






