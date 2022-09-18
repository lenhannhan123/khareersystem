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

Route::get('/svit', function () {
    return view('svit.svitindex');
});

Route::get('/khareersharing/english', function () {
    return view('sharing.sharing-learningenlish');
});

// Route::get('/sharing/english', function () {
//     return view('sharing.svitindex');
// });