<?php

use App\Models\News;
use App\Models\Login;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardTabelPelaporanController;



Route::get('/', function () {
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

    Route::get('/login',[LoginController::class,'index'])->middleware('guest');
    Route::post('/login',[LoginController::class,'authenticate']);
    Route::post('/logout',[LoginController::class,'logout']);

    Route::get('/register',[RegisterController::class,'index'])->name('login')->middleware('guest');
    Route::post('/register',[RegisterController::class,'store']);

    Route::get('/dashboard',function(){
        return view('dashboard.index');
        })->middleware('auth');
    
    Route::resource('/dashboard/lapor', DashboardTabelPelaporanController::class)->middleware('auth');

   

Route::get ('/Provinsi','App\Http\Controllers\ProvinsiController@index');
Route::get ('/kategori','App\Http\Controllers\KatBencanaCont@index');
Route::get ('/role','App\Http\Controllers\RoleController@index');
Route::get ('/kota','App\Http\Controllers\KotaController@index');
Route::get ('/kec','App\Http\Controllers\KecamatanController@index');
Route::get ('/bencana','App\Http\Controllers\BencanaController@index');
Route::get ('/user','App\Http\Controllers\UserController@index');

