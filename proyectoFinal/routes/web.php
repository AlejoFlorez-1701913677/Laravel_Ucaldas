<?php

use App\Http\Controllers\ProductController;
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
    return view('welcome');
});

Route::get(
    '/product',
    [ProductController::class, 'index']
)->name('product');

Route::get(
    '/category',
    [ProductCategoryController::class, 'index']
)->name('category');




Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


    Route::resource(
        'Product',
        App\Http\Controllers\ProductController::class
    );

    Route::resource(
        'ProductCategory',
        App\Http\Controllers\ProductCategoryController::class
    );
});
