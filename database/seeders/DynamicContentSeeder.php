<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Home;
use App\Models\About;

class DynamicContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $home = new Home;
        $home->we_are_prestes = 'Desde 2009, atuamos para criar e entregar moradias que superam expectativas nos mínimos detalhes, com preço justo, beleza e bem-estar. Somos entusiastas de empreendimentos que atendam a todas as expectativas e, por isso, nossos produtos têm design moderno e atraente, capaz de valorizar o imóvel e atender aos gostos e estilos mais exigentes.';
        $home->home_video = 'd1qRIEgJdWg';
        $home->save();

        $about = new About;
        $about->about_video = 'd1qRIEgJdWg';
        $about->your_home = 'Somos uma construtora especializada na criação e entrega de moradias que superam expectativas nos mínimos detalhes, com preço justo e bem-estar.';
        $about->your_home_image = '/assets/img/img-sobre.png';
        $about->mission = 'Gerar prosperidade construindo histórias felizes.';
        $about->vision = 'Ser a melhor e maior empresa do segmento no Paraná.';
        $about->values = 'Ética, obstinação por resultados, humildade, sincronismo e ousadia.';
        $about->history = 'A Prestes Construtora nasceu em 2009, no município de Castro, nos Campos Gerais, motivada pelo sonho de um jovem engenheiro empreendedor. Desde então, acreditamos que cada empreendimento que projetamos, construímos e entregamos é o começo de novas histórias, com um roteiro muito mais feliz.<br />
        <br />
        Atualmente, estamos sediados em Ponta Grossa, no Paraná. Mas o nosso maior orgulho hoje é dizer que somos genuinamente paranaenses, com atuação em várias cidades do estado. Nosso foco está no mercado imobiliário de empreendimentos de médio padrão e econômicos, desenvolvendo moradias completas com atributos que superam as expectativas, investindo em design moderno e nas melhores localizações. Nossa proposta é traduzir em moradias a paixão por fazer mais e melhor, em cada metro quadrado.<br />
        <br />
        E não paramos de evoluir, para entregar cada vez mais sonhos, sempre atentos ao que nos motiva: a felicidade de quem nos escolhe como marca de empreendimentos completos, seja para morar ou para investir. Continuamos expandindo para diversas cidades do Paraná, sempre cuidando dos mínimos detalhes em cada lar, para você poder morar com segurança e qualidade de vida, com preço justo. Acreditamos no impacto positivo que imprimimos na sociedade e na realização que proporcionamos aos nossos clientes, construindo lares de forma única, olhando para as necessidades, sonhos e desejos das pessoas.';

        $about->our_enterprises = 'Estamos sempre procurando expandir nossos empreendimentos, pois acreditamos ser possível morar bem comprando bem. Todos os nossos imóveis têm qualidade superior por um preço justo.';
        $about->life_institute_text = 'Criado em 2018, o Instituto Vida Prestes nasceu do sonho de transformação, como o braço social da Prestes Construtora e Incorporadora. Somos uma organização sem fins lucrativos e nosso objetivo é promover felicidade, bem-estar e qualidade de vida. Focamos na responsabilidade social, oferecendo suporte à comunidade através de projetos e iniciativas que buscam melhorar as condições de vida das pessoas.';
        $about->life_institute_image_2 = '/assets/img/Instituto-rolandia.png';
        $about->life_institute_image_1 = '/assets/img/Cantata_Natal_Prestes.png';
        $about->ceo_name = 'Breno Prestes';
        $about->ceo_image = '/assets/img/img-ceo.png';
        $about->ceo_history = 'Castrense, engenheiro civil, sonhador, inovador e visionário. Breno de Paula Prestes é o fundador da Prestes Construtora. O crescimento da empresa fundada por ele tornou um sonho grande, como gosta de dizer, em um modelo de organização, que caminha para ser a maior e a melhor do Paraná. Líder nato, amante da prática de esportes, Breno é também o presidente do Instituto Vida. A organização do terceiro setor reúne empresas e pessoas imbuídas de transformar e construir uma sociedade melhor.';
        $about->ceo_quote = 'Transformar a sociedade e construir histórias de felicidade por onde passamos, deixando a nossa marca e um legado de prosperidade nos dá a segurança e a certeza em dizer que estamos cumprindo com a nossa missão.';
        $about->cities = 13;
        $about->enterprises_delivered = 24;
        $about->housing_units = 7000;
        $about->direct_collaborators = 606;
        $about->undirect_collaborators = 700;
        $about->save();
    }
}
