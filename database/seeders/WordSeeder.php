<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class WordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('words')->insert([
            'word' => ['makan','berlari'],
            'type' => 'mudah',
            'difficulty' => 'kerja',
        ]);
    }
}