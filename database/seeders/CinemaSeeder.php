<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;


class CinemaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cinemas')->insert([
            'nome' => 'CineAju',
            'endereco' => 'Rua Aracaju, 777',
        ]);
        DB::table('cinemas')->insert([
            'nome' => 'CineSeta',
            'endereco' => 'Rua Ditin, 123',
        ]);
        DB::table('cinemas')->insert([
            'nome' => 'CineGloria',
            'endereco' => 'Rua Gloria, 321',
        ]);
    }
}