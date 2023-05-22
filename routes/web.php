<?php

use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\PageController;
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
    return view('pages.home');
})->name('home');

Route::get('/{page_name}', [PageController::class, 'index'])->name('page-name');
Route::get('/product/{product_name?}', [PageController::class, 'product'])->name('product');

Route::post('/contact-us/store', [ContactController::class, 'store'])->name('contact-us.store');

