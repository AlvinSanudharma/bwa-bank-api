<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('data_plans')->insert([
            [
                'name' => '10 GB',
                'price' => 218000,
                'operator_card_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '25 GB',
                'price' => 420000,
                'operator_card_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '40 GB',
                'price' => 2500000,
                'operator_card_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '99 GB',
                'price' => 5000000,
                'operator_card_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '10 GB',
                'price' => 218000,
                'operator_card_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '25 GB',
                'price' => 420000,
                'operator_card_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '40 GB',
                'price' => 2500000,
                'operator_card_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '10 GB',
                'price' => 218000,
                'operator_card_id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '25 GB',
                'price' => 420000,
                'operator_card_id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
