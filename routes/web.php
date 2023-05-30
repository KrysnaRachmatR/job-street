<?php

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

Route::get('/omah', function () {
    return view('landing.pages.home.index');
});

Route::get('/about', function () {
    return view('landing.pages.about.index');
});
Route::get('/contact', function () {
    return view('landing.pages.contact.index');
});

Route::get('/wakmin', function () {
    return view('dashboard.home');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
