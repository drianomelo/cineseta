<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;


class SalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('salas')->insert([
            'numero' => 1,
            'capacidade' => 100,
            'cinema_id' => 3,
        ]);
        DB::table('salas')->insert([
            'numero' => 1,
            'capacidade' => 120,
            'cinema_id' => 2,
        ]);
        DB::table('salas')->insert([
            'numero' => 2,
            'capacidade' => 90,
            'cinema_id' => 1,
        ]);
    }
}
