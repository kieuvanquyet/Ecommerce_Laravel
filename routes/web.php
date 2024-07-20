<?php

use App\Http\Controllers\Admin\CatalogueController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CatalogueController as ControllersCatalogueController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Models\Product;
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
   $products =  Product::query()->latest('id')->limit(12)->get();
//    dd($products);
    return view('client.welcome',compact('products'));
})->name('welcome');
Route::get('thongbao', function () {
   
//    dd($products);
    return view('client.thongbao',);
})->name('thongbao');
// Route::get('/', [CatalogueController::class,'index'])->name('admin.catalogues.index');

// Route::get('/', function () {
//     $products = \App\Models\Product::query()->latest('id')->limit(4)->get();

//     return view('welcome', compact('products'));
// })->name('welcome');



// Route::post('order/save', [OrderController::class, 'save'])->name('order.save');

Route::get('product/{slug}', [ProductController::class, 'detail'])->name('product.detail');
Route::get('cart/list', [CartController::class, 'list'])->name('cart.list');
Route::post('cart/add', [CartController::class, 'add'])->name('cart.add');
Route::post('order/save', [OrderController::class, 'save'])->name('order.save');