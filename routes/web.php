<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home',[
        "title" => "Home"
    ]);
    });

Route::get('/about', function () {
    return view('about',[
        "title" => "About",
        "nama" => "Nama",
        "email" => "Email"
    ]);

    });

Route::get('/news', function () {
    return view('news',[
        "title" => "News"
    ]);
     });    

Route::get('/login', function () {
    return view('login',[
        "title" => "Login",
        "nama" => "Nama",
        "email" => "Email",
        "tgl_lahir" => "Tanggal Lahir",
        "password" => "Password",
        "id_kecamatan" => "ID Kecamatan"
    ]);
});
