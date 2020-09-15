<?php

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/curso-de-frances', function () {
    return view('courses.french');
});

Route::get('/curso-de-italiano', function () {
    return view('courses.italian');
});

Route::get('/terminos-y-condiciones', function () {
    return view('contracts.terms');
});

Route::get('/politica-de-privacidad', function () {
    return view('contracts.privacy');
});