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
    
        $news_post = [
        [
                "title" => "Bencana Alam Banjir,Longsor, &  Angin Puting Beliung",
                "time" => "Senin 21 September 2020 Pukul 16.00 Wib",
                "location" => "Kec. Pamijahan, Kec.Ciawi, Kec Cisarua, Kec.Caringin, Kec.Cijeruk",
                "kronologi" => "Akibat Hujan Deras dan Angin Lebat Sehingga Menyebabkan Sebagian Wilayah di Kabupaten Bogor Mengalami Banjir, Longsor, dan Angin Kencang"
    
            ],
         [
                "title" => "Bencana Alam Angin Ribut",
                "time" => "28 Maret 2021 Pukul 14.00 WIB",
                "location" => "Kecamatan Jaten dan Kecamatan Tasikmadu, Kabupaten Karanganyar",
                "kronologi" => "Pada hari Minggu, 28 Maret 2021 sekitar pukul 14.30 WIB 
                        terjadi Bencana Alam Angin Ribut di wilayah Kecamatan Jaten dan Kecamatan Tasikmadu, 
                        Kabupaten Karanganyar. Menurut keterangan saksi a.n Sukardi 72 tahun menuturkan, 
                        pada saat itu cuaca dalam kondisi hujan dengan intensitas cukup deras disertai angin. 
                        Dalam kondisi cuaca tersebut mengakibatkan pohon tumbang di beberapa titik jalan raya dan beberapa rumah rusak tertimpa pohon"

        ],
    ];
    return view('news',[
        "title" => "News",
        "news" => $news_post
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
