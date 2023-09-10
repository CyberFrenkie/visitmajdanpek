<?php

use App\Models\Sight;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\sightsController;

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


// // Homepage
// Route::get('/', function () {
//   return view('home') ;
// });

Route::get('/', [homeController::class, 'index']);

Route::get('/new/{id}', [homeController::class, 'show']);


// Transportation page
Route::get('/transportation', function () {
  return view('secondary-pages/transportation') ;
});

// Hotels page
Route::get('/hotels', function () {
  return view('secondary-pages/hotels') ;
});

// Institutions page
Route::get('/institutions', function () {
  return view('secondary-pages/institutions') ;
});





// Sights page
Route::get('/sights', [sightsController::class, 'index']);

// Sight sigle page
Route::get('/sight/{id}', [sightsController::class, 'show']);


// Majdanpek page
Route::get('/about-majdanpek', function () {
  return view('about-majdanpek') ;
});

// About us page
Route::get('/about-us', function () {
  return view('about-us') ;
});

// Contact page
Route::get('/contact', function () {
  return view('contact') ;
});



// Form controller route
Route::post('/submit-contact-form', [ContactController::class, 'submitForm'])->name('submit.contact.form');


