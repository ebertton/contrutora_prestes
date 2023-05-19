<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blog')->insert([
            'titulo' => 'Blog da Prestes',
            'descricao' => 'No blog da prestes você encontrará diversos conteúdos exclusivos sobre novidades dos nossos empreendimentos, informações sobre contruções e dicas para o seu imóvel, nós compartilhamos conhecimentos fundamentais que te auxiliam ainda mais nessa nova etapa da sua vida.
            Confira os conteúdos e fique por dentro do mercado imobiliário no nosso blog.
            Clique aqui e conheça muito mais!',
        ]);
    }
}
