<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tips')->insert([
            [
                'title' => 'Cara menyimpan uang yang baik',
                'thumbnail' => 'nabung.jpg',
                'url' => "https://www.cimbniaga.co.id/id/inspirasi/perencanaan/panduan-lengkap-menabung-saham-untuk-investasi-jangka-panjang",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Cara berinvestasi Emas',
                'thumbnail' => 'emas.jpg',
                'url' => "https://pintu.co.id/blog/cara-investasi-emas-bagi-pemula-agar-untung",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Cara menabung saham',
                'thumbnail' => 'saham.jpg',
                'url' => "https://finance.detik.com/koki-duit-finansia/d-3809253/ingin-menabung-saham-bagaimana-caranya",
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
