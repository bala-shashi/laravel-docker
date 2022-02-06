<?php

use App\Http\Controllers\Contact;
use App\Http\Controllers\Order;
use App\Http\Controllers\QuoteController;
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


Route::get('/order', [Order::class, 'index']);
Route::get('/contact', [Contact::class, 'index']);

Route::post('/order', [Order::class, 'create'])->name('order')->middleware('pageState');
Route::post('/contact', [Contact::class, 'create'])->name('contact')->middleware('pageState');


// Route::resource('/quotes', QuoteController::class);
