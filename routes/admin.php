<?php

use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CatalogueController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\PromotionController ;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\OrderController;
// use App\Http\Controllers\PromotionController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')
    ->as('admin.')
    ->middleware(['auth', 'checkUserType'])
    ->group(function () {
        Route::get('/', function () {
            return view('admin.dashboard');
        })->name('dashboard');

        Route::prefix('catalogues')
            ->as('catalogues.')
            ->group(function () {
                Route::get('/', [CatalogueController::class, 'index'])->name('index');
                Route::get('create', [CatalogueController::class, 'create'])->name('create');
                Route::post('store', [CatalogueController::class, 'store'])->name('store');
                Route::get('show/{id}', [CatalogueController::class, 'show'])->name('show');
                Route::get('{id}edit', [CatalogueController::class, 'edit'])->name('edit');
                Route::put('{id}update', [CatalogueController::class, 'update'])->name('update');
                Route::get('{id}destroy', [CatalogueController::class, 'destroy'])->name('destroy');
            });
        Route::resource('products', ProductController::class);

        Route::get('orders', [OrderController::class, 'index'])->name('orders.index');

        // Route để cập nhật trạng thái đơn hàng
        Route::post('orders/{id}/update-status', [OrderController::class, 'updateStatus'])->name('orders.updateStatus');

        // KHUYEN MAI
        Route::resource('promotions', PromotionController::class);

        Route::resource('users', UserController::class);

        Route::resource('banners', BannerController::class);
        Route::post('banners/{banner}/activate', [BannerController::class, 'activate'])->name('banners.activate');
    });
