<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use DB;


class SessaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataHorarioSessao1 = Carbon::create(2023, 10, 15, 14, 30, 0);
        $dataHorarioSessao2 = Carbon::create(2023, 10, 15, 14, 30, 0);
        $dataHorarioSessao3 = Carbon::create(2023, 10, 15, 14, 30, 0);

        DB::table('sessaos')->insert([
            'horario' => $dataHorarioSessao1,
            'dia' => $dataHorarioSessao1,
            'sala_id' => 1,
            'filme_id' => 3,
        ]);

        DB::table('sessaos')->insert([
            'horario' => $dataHorarioSessao2,
            'dia' => $dataHorarioSessao2,
            'sala_id' => 2,
            'filme_id' => 1,
        ]);

        DB::table('sessaos')->insert([
            'horario' => $dataHorarioSessao3,
            'dia' => $dataHorarioSessao3,
            'sala_id' => 3,
            'filme_id' => 2,
        ]);
    }
}
