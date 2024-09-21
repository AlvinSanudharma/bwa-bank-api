<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('transaction_types')->insert([
            [
                'name' => 'Transfer',
                'code' => 'transfer',
                'action' => 'debit',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Internet',
                'code' => 'internet',
                'action' => 'debit',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Top Up',
                'code' => 'top_up',
                'action' => 'credit',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Receive',
                'code' => 'receive',
                'action' => 'credit',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
