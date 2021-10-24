<?php

use App\Http\Controllers\NewsController;
use App\Models\News;
use Illuminate\Support\Facades\Route;


Route::get('/home', function () {
    return view('home',[
        "title" => "Home",
        "lapor" => "Pelaporan Bencana",
        "history" => "History Laporan"
    ]);
});

Route::get('/news', [NewsController::class, 'index']);
Route::get('/news/{slug}' , [NewsController::class, 'show'] );

Route::get('/login', function (){
$login_post = [
    [
        "title" => "User",
        "slug" => "login-user"
    ],
    [
        "title" => "Petugas",
        "slug" => "login-petugas"
    ],
    [
        "title" => "Admin",
        "slug" => "login-admin"
    ],
];

    return view('login',[
        "title" => "Login",
        "login" => $login_post
    ]);
});


Route::get('login/{slug}', function($slug_login){
    return view('login2',[
        "title" => "Login"
    ]);
});


Route::get('/registrasi', function (){
        return view('Registrasi',[
            "title" => "Registrasi",
            "id_kecamatan" => "ID Kecamatan",
            "password" => "Password",
            "email" => "Email",
            "tgl_lahir" => "Tanggal Lahir"
        ]);
    });


    Route::get('/about', function () {
        $about_post = [
            [
            "title" => "About",
            "nama" => "Finndy",
            "nim" => "152011513011"
            ],
            [
            "title" => "About",
            "nama" => "Novira",
            "nim" => "152011513003"
            ],
        ];
        return view('about',[
            "title" => "About",
            "about" => $about_post
        ]);
    });

