<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class TransactionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        DB::table('transaction_types')->truncate();

        Schema::enableForeignKeyConstraints();

        DB::table('transaction_types')->insert([
            [
                'name' => 'Transfer',
                'code' => 'transfer',
                'action' => 'debit',
                'thumbnail' => 'transfer.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Internet',
                'code' => 'internet',
                'action' => 'debit',
                'thumbnail' => 'electric.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Top Up',
                'code' => 'top_up',
                'action' => 'credit',
                'thumbnail' => 'top-up.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Receive',
                'code' => 'receive',
                'action' => 'credit',
                'thumbnail' => 'withdraw.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
