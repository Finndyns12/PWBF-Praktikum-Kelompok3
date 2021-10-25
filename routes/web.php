<?php

use App\Models\News;
use App\Models\Login;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;



Route::get('/home', function () {
    return view('home',[
        "title" => "Home",
        "lapor" => "Pelaporan Bencana",
        "history" => "History Laporan"
    ]);
});

Route::get('/news', [NewsController::class, 'index']);
Route::get('/news/{news}' , [NewsController::class, 'show'] );



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

    Route::get('/login',[LoginController::class,'index']);
    Route::post('/login',[LoginController::class,'authenticate']);

    Route::get('/register',[RegisterController::class,'index']);
    Route::post('/register',[RegisterController::class,'store']);

    Route::get('/dashboard',[DashboardController::class,'index']);

Route::get ('/Provinsi','App\Http\Controllers\ProvinsiController@index');
Route::get ('/kategori','App\Http\Controllers\KatBencanaCont@index');
Route::get ('/role','App\Http\Controllers\RoleController@index');
Route::get ('/kota','App\Http\Controllers\KotaController@index');
Route::get ('/kec','App\Http\Controllers\KecamatanController@index');
Route::get ('/bencana','App\Http\Controllers\BencanaController@index');
Route::get ('/user','App\Http\Controllers\UserController@index');

