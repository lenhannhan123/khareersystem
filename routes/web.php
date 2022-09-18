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







Route::middleware([link::class])->group(function () {
    Route::get('/svit', function () {
        return view('svit.svitindex');
    });
    
    Route::get('/khareersharing/english', function () {
        return view('sharing.sharing-learningenlish');
    });
    
    Route::get('/khareersharing/it', function () {
        return view('sharing.sharing-learningit');
    });
    
    Route::get('/khareersharing/content', function () {
        return view('sharing.sharing-learningcontent');
    });
    
    Route::get('/khareersharing/photo', function () {
        return view('sharing.sharing-learningphoto');
    });
    
    Route::get('/', function () {
        return view('khareer.index');
    });
    Route::get('/home', function () {
        return view('khareer.index');
    });
    Route::get('/trang_chu', function () {
        return view('khareer.index');
    });
});