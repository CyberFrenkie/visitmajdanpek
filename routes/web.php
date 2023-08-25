<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;

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

Route::get('/',[homeController::class, 'index'] );

Route::get('/home', function () {
  return view('home') ;
});

Route::get('/sights', function () {
  return view('sights') ;
});

Route::get('/about-majdanpek', function () {
  return view('about-majdanpek') ;
});

Route::get('/about-us', function () {
  return view('about-us') ;
});

Route::get('/contact', function () {
  return view('contact') ;
});


