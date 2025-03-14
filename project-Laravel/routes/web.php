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

Route::get('/home', function () {
    return view('public site');
});


Route::get('/dasbord', function () {
    return view('layout.main');
});

Route::get('/booking', function () {
    return view('booking');
});

// Route::get('/contain', function () {
//     return view('layout.contain');
// });

Route::get('/contactus', function () {          
    return view('contactus4');
});

Route::get('/about', function () {
    return view('layout.about');
});