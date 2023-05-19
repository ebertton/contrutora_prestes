<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Differential;

class DifferentialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $differential = new Differential;
        $differential->icon = '/assets/img/icon-garantia.png';
        $differential->title = 'Garantia de entrega';
        $differential->differential = 'Somos uma construtora paranaense que assegura a entrega de todos os seus empreendimentos através da Garantia Prestes. Um benefício exclusivo que garante aos nossos clientes a segurança de comprar e viver, completamente, a conquista do seu sonho, com confiabilidade e tranquilidade, desde a aquisição até o recebimento das chaves.';
        $differential->save();

        $differential = new Differential;
        $differential->icon = '/assets/img/icon-flexivel.png';
        $differential->title = 'Planta Flexível';
        $differential->differential = 'A sua casa com a sua cara. O nosso sistema de planta flexível garante ao cliente a modulação do seu imóvel de maneira que se adéque perfeitamente às suas necessidades e objetivos.';
        $differential->save();
        
        $differential = new Differential;
        $differential->icon = '/assets/img/icon-valorizacao.png';
        $differential->title = 'Valorização do Imóvel';
        $differential->differential = 'Somos uma construtora paranaense que assegura a entrega de todos os seus empreendimentos através da Garantia Prestes. Um benefício exclusivo que garante aos nossos clientes a segurança de comprar e viver, de forma completa, a conquista do seu sonho, com confiabilidade e tranquilidade, desde a aquisição até o recebimento das chaves.';
        $differential->save();
        
        $differential = new Differential;
        $differential->icon = '/assets/img/icon-credibilidade.png';
        $differential->title = 'Credibilidade e experiência';
        $differential->differential = 'Somos uma construtora reconhecida no mercado, premiada por importantes entidades do setor e com o título de melhor lançamento - ADEMI-PR 2018; melhor entrega em 2021, também pela ADEMI-PR. Em 2019, a linha Vista ficou entre os três melhores empreendimentos residenciais do Brasil, segundo o GRI Awards 2019.';
        $differential->save();
        
        $differential = new Differential;
        $differential->icon = '/assets/img/icon-qualidade.png';
        $differential->title = 'Qualidade no acabamento';
        $differential->differential = 'Todos os nossos empreendimentos possuem um olhar exigente para a qualidade. Prezamos pelo design, pelo acabamento minucioso, sempre atentos aos detalhes que fazem toda a diferença.';
        $differential->save();
        
        $differential = new Differential;
        $differential->icon = '/assets/img/icon-more.png';
        $differential->title = 'More com qualidade de vida';
        $differential->differential = 'Priorizamos torres adequadas no seu espaçamento, garantindo ambientes ventilados e bem iluminados. Muito mais do que ambientes coletivos, investimos e entregamos áreas de lazer diferentes, completas e equipadas, preservando e adequando o paisagismo e as áreas verdes.';
        $differential->save();
        
    }
}
