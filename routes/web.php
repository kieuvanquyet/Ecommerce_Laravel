<?php

use App\Http\Controllers\Admin\CatalogueController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CatalogueController as ControllersCatalogueController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController as ControllersUserController;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//    $products =  Product::query()->latest('id')->limit(12)->get();

//     return view('client.welcome',compact('products'));
// })->name('welcome');

Route::get('thongbao', function () {
    return view('client.thongbao');
})->name('thongbao');

Route::get('/', function () {
    return view('client.trangchu');
});

// HOME
Route::get('/', [ProductController::class, 'trangchu'])->name('/');
Route::get('products', [ProductController::class, 'index'])->name('index');
Route::get('product/{slug}', [ProductController::class, 'detail'])->name('product.detail');

// CART
Route::get('cart/list', [CartController::class, 'list'])->name('cart.list');
Route::post('cart/add', [CartController::class, 'add'])->name('cart.add');

// CHECKOUT
Route::get('checkout/{order}', [OrderController::class, 'showCheckout'])->name('checkout');
Route::post('order/save', [OrderController::class, 'save'])->name('order.save');
Route::post('order/store', [OrderController::class, 'store'])->name('order.store');

// CLIENT USER
Route::get('user/profile', [UserController::class, 'showProfile'])->name('user.profile');
Route::get('user/orders/{id}', [UserController::class, 'showOrder'])->name('user.order-detail');
Route::post('user/orders/{id}/cancel', [UserController::class, 'cancelOrder'])->name('user.cancel-order');

// LOGIN
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
