<?php

namespace App\Models;


class News
{
    private static $news_posts = [
    [
            "title" => "Bencana Alam Banjir,Longsor, &  Angin Puting Beliung",
            "slug" => "bencana-alam-banjir-longsor-&-angin-puting-beliung",
            "time" => "Senin 21 September 2020 Pukul 16.00 Wib",
            "location" => "Kec. Pamijahan, Kec.Ciawi, Kec Cisarua, Kec.Caringin, Kec.Cijeruk"
        ],
        [
            "title" => "Bencana Alam Angin Ribut",
            "slug" => "bencana-alam-angin-ribut",
            "time" => "28 Maret 2021 Pukul 14.00 WIB",
            "location" => "Kecamatan Jaten dan Kecamatan Tasikmadu, Kabupaten Karanganyar"
        ]
        ];

        public static function all()
        {
            return collect(self::$news_posts);
        }

        public static function find($slug)
    {
            $newss = static::all();

            return $newss->firstWhere('slug',$slug);
    }
}