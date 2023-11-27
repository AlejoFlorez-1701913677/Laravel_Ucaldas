<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GeneralController;
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

Route::get('/',  [GeneralController::class, 'welcome']);

Route::get(
    '/product',
    [ProductController::class, 'index']
)->name('product');

Route::get(
    '/category',
    [ProductCategoryController::class, 'index']
)->name('category');

Route::get('/menu/{slug}', [ProductController::class, 'show'])->name('Product.show');



Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {

    Route::get('/dashboard', [GeneralController::class, 'dashboard'])->name('dashboard');

    Route::get('/productDashboard', [GeneralController::class, 'productDashboard'])->name('productDashboard');

    Route::get('/categoryDashboard', [GeneralController::class, 'categoryDashboard'])->name('categoryDashboard');

    Route::get('/userDashboard', [GeneralController::class, 'userDashboard'])->name('userDashboard');

    Route::resource(
        'Product',
        App\Http\Controllers\ProductController::class
    );

    Route::resource(
        'ProductCategory',
        App\Http\Controllers\ProductCategoryController::class
    );

    Route::resource(
        'User',
        App\Http\Controllers\UserController::class
    );
});
