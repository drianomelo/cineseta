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
            'capa' => 'https://upload.wikimedia.org/wikipedia/pt/thumb/3/3b/A_Viagem_de_Chihiro.JPG/220px-A_Viagem_de_Chihiro.JPG',
            'titulo' => 'A Viagem de Chihiro',
            'sinopse' => 'Chihiro e seus pais estão se mudando para uma cidade diferente. A caminho da nova casa, o pai decide pegar um atalho. Eles se deparam com uma mesa repleta de comida, embora ninguém esteja por perto. Chihiro sente o perigo, mas seus pais começam a comer. Quando anoitece, eles se transformam em porcos. Agora, apenas Chihiro pode salvá-los.',
            'data_lancamento' => '2003-07-18',
            'faixa_etaria' => 'livre'
        ]);
        DB::table('filmes')->insert([
            'capa' => 'https://media.fstatic.com/pQo2FYmZToT8CAC3M6RvnIsI5LI=/210x312/smart/filters:format(webp)/media/movies/covers/2011/06/9b4a2be3be4cb5ace0c43e577962a713.jpg',
            'titulo' => 'O Castelo Animado',
            'sinopse' => 'Uma bruxa lança uma terrível maldição sobre a jovem Sophie transformando-a em uma velha. Desesperada, ela embarca em uma odisseia em busca do mago Howl, um misterioso feiticeiro que pode ajudá-la a reverter o feitiço.',
            'data_lancamento' => '2005-07-15',
            'faixa_etaria' => 'livre'
        ]);
        DB::table('filmes')->insert([
            'capa' => 'https://www.sonypictures.com.br/sites/brazil/files/2022-07/ulbld_cartaz.regular_1080x1350px-BREVE.jpg',
            'titulo' => 'Um Lugar Bem Longe Daqui',
            'sinopse' => 'Kya é uma garota abandonada, que teve que se criar sozinha no brejo da Carolina do Norte. Por anos, rumores da “Menina do Brejo” assombraram Barkley Cove, isolando a afiada e inteligente Kya de sua comunidade. Atraída por dois jovens na cidade, Kya se abre para um mundo novo e estimulante, mas quando um deles é encontrado morto, ela é imediatamente considerada a principal suspeita. Conforme o caso vai se desdobrando, a verdade sobre o que aconteceu se torna cada vez mais nebulosa, ameaçando revelar os muitos segredos que existem no brejo.',
            'data_lancamento' => '2022-09-01',
            'faixa_etaria' => '14'
        ]);
        DB::table('filmes')->insert([
            'capa' => 'https://seuladogeek.com.br/wp-content/uploads/2022/02/Arremessando-alto-Filme.jpg',
            'titulo' => 'Arremessando Alto',
            'sinopse' => 'Um olheiro de basquete azarado encontra um jogador com um grande potencial e se esforça para mostrar ao mundo que os dois merecem chegar à NBA.',
            'data_lancamento' => '2022-06-03',
            'faixa_etaria' => '12'
        ]);
        DB::table('filmes')->insert([
            'capa' => 'https://br.web.img3.acsta.net/pictures/18/03/01/20/26/0577579.jpg',
            'titulo' => 'Um Lugar Silencioso',
            'sinopse' => 'Em uma fazenda nos Estados Unidos, uma família do Meio-Oeste é perseguida por uma entidade fantasmagórica assustadora. Para se protegerem, eles devem permanecer em silêncio absoluto, a qualquer custo, pois o perigo é ativado pela percepção do som.',
            'data_lancamento' => '2018-04-05',
            'faixa_etaria' => '14'
        ]);
        DB::table('filmes')->insert([
            'capa' => 'https://br.web.img2.acsta.net/pictures/19/07/05/17/30/5167951.jpg',
            'titulo' => 'Homem-Aranha: Longe de Casa',
            'sinopse' => 'Peter Parker está em uma viagem de duas semanas pela Europa, ao lado de seus amigos de colégio, quando é surpreendido pela visita de Nick Fury.',
            'data_lancamento' => '2019-06-04',
            'faixa_etaria' => '10'
        ]);
        DB::table('filmes')->insert([
            'capa' => 'https://br.web.img3.acsta.net/pictures/19/04/26/17/30/2428965.jpg',
            'titulo' => 'Vingadores: Ultimato',
            'sinopse' => 'Após Thanos eliminar metade das criaturas vivas, os Vingadores têm de lidar com a perda de amigos e entes queridos. Com Tony Stark vagando perdido no espaço sem água e comida, Steve Rogers e Natasha Romanov lideram a resistência contra o titã louco.',
            'data_lancamento' => '2019-04-25',
            'faixa_etaria' => '12'
        ]);
    }
}