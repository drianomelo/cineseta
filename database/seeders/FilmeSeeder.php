<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class FilmeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('filmes')->insert([
            'capa' => 'https://blogorientese.files.wordpress.com/2014/11/totoro_bluray.jpg',
            'titulo' => 'Meu Amigo Totoro',
            'sinopse' => 'As irmãs Satsuki e Mei se mudam para o campo para ficar mais perto do hospital onde sua mãe está internada. Lá conhecem os Totoros, adoráveis criaturas místicas e alegres, que só podem ser vistas pelas crianças. Com eles, as duas irmãs viverão mágicas aventuras no campo.',
            'data_lancamento' => '1995-03-08',
            'faixa_etaria' => 'livre'
        ]);
        DB::table('filmes')->insert([
            'capa' => 'https://blogorientese.files.wordpress.com/2014/11/totoro_bluray.jpg',
            'titulo' => 'A Viagem de Chihiro',
            'sinopse' => 'Chihiro e seus pais estão se mudando para uma cidade diferente. A caminho da nova casa, o pai decide pegar um atalho. Eles se deparam com uma mesa repleta de comida, embora ninguém esteja por perto. Chihiro sente o perigo, mas seus pais começam a comer. Quando anoitece, eles se transformam em porcos. Agora, apenas Chihiro pode salvá-los.',
            'data_lancamento' => '2003-07-18',
            'faixa_etaria' => 'livre'
        ]);
        DB::table('filmes')->insert([
            'capa' => 'https://blogorientese.files.wordpress.com/2014/11/totoro_bluray.jpg',
            'titulo' => 'O Castelo Animado',
            'sinopse' => 'Uma bruxa lança uma terrível maldição sobre a jovem Sophie transformando-a em uma velha. Desesperada, ela embarca em uma odisseia em busca do mago Howl, um misterioso feiticeiro que pode ajudá-la a reverter o feitiço.',
            'data_lancamento' => '2005-07-15',
            'faixa_etaria' => 'livre'
        ]);
    }
}