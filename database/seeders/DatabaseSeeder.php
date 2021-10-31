<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\kota;
use App\Models\News;
use \App\Models\provinsi;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //\App\Models\User::factory(10)->create();

        News::create([
                'title'=>'LAPORAN KEJADIAN BENCANA ALAM 21 SEPTEMBER 2020',
                'excerpt' => 'Banjir,Longsor, &  Angin Puting Beliung',
                'body' => 'KEJADIAN : Banjir,Longsor, &  Angin Puting Beliung
                LOKASI KEJADIAN    :
                1.Kec. Pamijahan,
                2.Kec.Ciawi, 
                3.Kec Cisarua, 
                4. Kec.Caringin, 
                5.Kec.Cijeruk
                
                WAKTU KEJADIAN    : Senin 21 September 2020 Pukul 16.00 Wib
                *UPDATE KEJADIAN: 
                Senin, 21 September 2020 Pukul 18.00 Wib
                
                 KRONOLOGI KEJADIAN
                - Akibat Hujan Deras dan Angin Lebat Sehingga Menyebabkan Sebagian Wilayah di Kabupaten Bogor Mengalami Banjir, Longsor, dan Angin Kencang.
                '
        ]);
    }
}
