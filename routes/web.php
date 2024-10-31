<?php

use App\Http\Controllers\BiodataController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//ini adalah route tanpa MVC
Route::get('/jalurbaru', function () {
    return 'Ini Jalur Baru Tanpa MVC';
});


//ini adalah Route Menggunakan View
Route::get('/palabapakau', function () {
    return view('viewjalur');
});


//ini adalah Route Menggunakan View & Controller
Route::get('/jalurcontroller', [JalurController::class, 'index']);


//ini adalah Route Menggunakan View & Controller
Route::get('/jalurmodel', [JalurController::class, 'menampilkanDataModel']);

//ini adalah Route Menggunakan View & Controller
Route::get('/jalurBiodata', [BiodataController::class, 'menampilkanBiodata']);


