<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController2;
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


Route::get('/', [UserController2::class, 'check_model'])->name('check_model');


// Start of AboutController //
Route::post('/about/update/{about}', [AboutController::class, 'update'])->name('about.update');
Route::get('/about/update/{about}', [AboutController::class, 'edit2'])->name('about.edit2');
Route::resource('about', AboutController::class)->except('update');
// End of AboutController //

Route::get('/product', [ProductController::class, 'getProducts'])->name('getProducts');
Route::get('/search', [ProductController::class, 'search'])->name('search');
