<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class PaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        DB::table('payment_methods')->truncate();

        Schema::enableForeignKeyConstraints();

        DB::table('payment_methods')->insert([
            [
                'name' => 'Bank BWA',
                'code' => 'bwa',
                'thumbnail' => null,
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bank BNI',
                'code' => 'bni_va',
                'thumbnail' => 'bni.png',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bank BCA',
                'code' => 'bca_va',
                'thumbnail' => 'bca.png',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bank BRI',
                'code' => 'bri_va',
                'thumbnail' => 'bri.png',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
