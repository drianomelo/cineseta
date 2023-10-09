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
        $dataHorarioSessao4 = Carbon::create(2023, 10, 15, 14, 30, 0);

        DB::table('sessoes')->insert([
            'horario' => "14:30",
            'dia' => $dataHorarioSessao1,
            'sala_id' => 1,
            'filme_id' => 3,
        ]);

        DB::table('sessoes')->insert([
            'horario' => "15:20",
            'dia' => $dataHorarioSessao2,
            'sala_id' => 2,
            'filme_id' => 1,
        ]);

        DB::table('sessoes')->insert([
            'horario' => "16:50",
            'dia' => $dataHorarioSessao3,
            'sala_id' => 3,
            'filme_id' => 2,
        ]);

        DB::table('sessoes')->insert([
            'horario' => "19:50",
            'dia' => $dataHorarioSessao3,
            'sala_id' => 3,
            'filme_id' => 9,
        ]);
    }
}
