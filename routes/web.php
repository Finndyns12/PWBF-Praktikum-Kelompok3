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

Route::get('/home', function () {
    return view('home');
    });

Route::get('/about', function () {
    return view('about',[
        "nama" => "Nama",
        "email" => "Email"
    ]);

    });

Route::get('/news', function () {
    return view('news');
     });    

Route::get('/login', function () {
    return view('login',[
        "nama" => "Nama",
        "email" => "Email",
        "tgl_lahir" => "Tanggal Lahir",
        "password" => "Password",
        "id_kecamatan" => "ID Kecamatan"


    ]);
});
