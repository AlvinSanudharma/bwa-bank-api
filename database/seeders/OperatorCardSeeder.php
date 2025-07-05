<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class OperatorCardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        DB::table('operator_cards')->truncate();

        Schema::enableForeignKeyConstraints();

        DB::table('operator_cards')->insert([
            [
                'name' => 'Telkomsel',
                'status' => 'active',
                'thumbnail' => 'telkomsel.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Indosat',
                'status' => 'active',
                'thumbnail' => 'indosat.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Singtel',
                'status' => 'active',
                'thumbnail' => 'singtel.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Smartfren',
                'status' => 'active',
                'thumbnail' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
