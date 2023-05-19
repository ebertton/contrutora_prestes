<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'id_tags' => 1,
            'titulo' => '7 coisas que você precisa saber antes de comprar seu imóvel',
            'texto' => 'Comprar um imóvel é o sonho de muitos brasileiros. Nessa hora, porém, é preciso prestar atenção em alguns aspectos que podem ajudar a fazer dessa aquisição o melhor negócio da sua vida.
Adquirir um imóvel envolve um investimento financeiro considerável, além de projetos pessoais e expectativas. Para te ajudar nessa experiência, apresentamos aqui 7 coisas que você precisa saber antes de comprar um imóvel. Confira!
A tranquilidade e a segurança que o imóvel próprio representa têm levado muitas famílias a substituir o aluguel pela prestação do financiamento imobiliário. Afinal, nada como investir recursos em algo que será seu no futuro.
Para garantir que tudo ocorra da melhor maneira possível, é importante prestar atenção a alguns aspectos relacionados a essa transação. Confira a seguir 7 coisas que você precisa saber antes de comprar seu imóvel.
Planejar a compra do seu imóvel é a principal recomendação para quem deseja fazer desse sonho uma realidade. O planejamento envolve uma série de providências e contribui para que o processo de compra aconteça de maneira mais segura e tranquila. Para isso, reúna informações referentes do tipo de imóvel que deseja, estude as possibilidades de financiamento e defina um passo a passo a ser seguido. O planeiamento deve conter as etapas para a aquisicão do imóvel e prever um prazo para a realização de cada uma delas.
Dica da Prestes: atualmente há vários modelos de planilhas para planejamento disponíveis online e
gratuitamente como as ferramentas do Gooole e Excel.
• Prepare seu orcamento
Preparar-se financeiramente para a compra do imóvel é outro aspecto fundamental. Para isso, crie o hábito de fazer um controle das suas finanças, incluindo o levantamento da renda familiar e dos gastos mensais. Em seguida, faça uma análise dos custos que podem ser reduzidos ou até mesmo eliminados. Uma boa dica é trocar programas familiares mais caros, como ir a restaurantes, por opções mais baratas ou gratuitas, como passear no parque. Tenha em mente que você estará fazendo um dos investimentos mais importantes da sua vida; por isso, é crucial garantir o pagamento da entrada e das parcelas do financiamento, certo?
Dica da Prestes: faça uma simulação do financiamento imobiliário e verifique o seu saldo do FGTS, que pode ser usado na compra do imóvel. Com esses números em mãos, você já pode prever esse custo no seu orçamento.
• Entenda o perfil da sua família
Conhecer o perfil da sua família possibilita mais assertividade na escolha do imóvel ideal. Essa análise é decisiva para a definição de qual é o tipo de residência mais adequada casa, sobrado, apartamento, condomínio fechado etc. Ainda, a metragem, o número de cômodos, diferenciais como vagas de garagem, suítes, espaço para home office, área de lazer etc. Aqui também entra a classificação do imóvel: popular, médio ou alto padrão.
Dica da Prestes: analisar projetos futuros é importante nesse momento. Quando se trata de um casal, por exemplo, vale questionar se há planos de ter filhos. Nesse caso, um imóvel com 2 ou 3 quartos pode ser mais indicado.
• Entenda o perfil da sua família
Procurar a localização ideal também é uma coisa importante a se fazer antes de fechar negócio.
Essa etapa exige tempo e pesquisa, levando em consideração intormações como locais de trabalho ou de estudo dos moradores. Com base no perfil da família é possível definir detalhes importantes como se a preferência é por um bairro mais residencial e tranquilo, por regiões mais próximas ao centro da cidade ou, ainda, por áreas perto de parques, praças e outros espaços de lazer. Também é recomendado verificar a proximidade de comércio e de serviços, pois isso pode garantir mais praticidade ao dia a dia.
Dica da Prestes: tenha em mente que a localização pode interferir na valorização do imóvel. Regiões com potencial de desenvolvimento são as mais indicadas.
• Avalie o estado de conservação do imóvel
Avaliar o estado de conservação do imóvel é outro ponto essencial na hora da aquisição da propriedade. Quando se trata de um lançamento ou de um imóvel novo, o foco está na qualidade da obra. Já quando se trata de um imóvel usado, será necessário analisar se ele está bem conservado. Para isso, devem ser avaliados uma série de quesitos, entre eles, piso, paredes, portas e janelas, fechaduras, além das instalações elétricas e hidráulicas.
Alguns indicativos de problemas são rachaduras, infiltrações, mofo, bem como a presença de cupins. No caso de necessidade de reparos ou reforma, vale fazer uma contraproposta pelo imóvel, considerando esse gasto futuro.
Dica da Prestes: Contar com um especialista para avaliar o estado de conservação do imóvel é a melhor forma de ter uma noção precisa da situação.',

            'data_publicacao' => '2023-02-13',
            'id_usuarios' => 1
        ]);

        for ($i = 0; $i < 8; $i++) {
            DB::table('posts')->insert([
                'id_tags' => 1,
                'titulo' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada sapien ac lobortis auctor.',
                'texto' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada sapien ac lobortis auctor. Aliquam at libero commodo, efficitur lectus euismod, tristique nisl. Vivamus vel magna vel tellus aliquam posuere vel vel tortor. Pellentesque eu lorem eu magna blandit varius sit amet eu augue. Donec eleifend dolor ut enim fermentum sodales. Duis ut consectetur diam, at aliquet sapien. Suspendisse potenti. Duis porttitor, turpis ut ullamcorper lobortis, nulla felis ultricies neque, tempor gravida lacus magna at enim.
In hac habitasse platea dictumst. Phasellus laoreet, sem ac tempor venenatis, dui massa mattis est, id euismod mi enim eget justo. Nam vulputate lectus id arcu euismod blandit. Vivamus posuere, nisi quis pellentesque ultrices, tortor nisl interdum mi, quis laoreet urna elit non nisl. Sed sit amet est tincidunt, lacinia ipsum luctus, egestas diam. Nulla facilisi. Vivamus ac dolor in elit accumsan commodo. Nam ut viverra neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus orci mi, tempus sit amet enim ac, bibendum dictum ex. Nulla vel egestas risus, ut convallis est. Aliquam nibh diam, pulvinar a est sit amet, aliquam laoreet dolor. Quisque a convallis dui.
Nulla quis egestas odio, quis tincidunt nisi. Donec quis leo ultricies, feugiat mi et, maximus augue. Vivamus tincidunt condimentum viverra. Nullam eu tellus imperdiet, sagittis turpis sit amet, vulputate leo. Mauris efficitur dui pretium rhoncus tempor. Donec euismod laoreet tempor. Phasellus imperdiet est ac feugiat vestibulum. Nulla facilisi. Proin tempus volutpat nisi, ut placerat risus maximus quis. Vestibulum et libero mattis, dapibus augue at, cursus dui. Ut viverra, augue ac volutpat dictum, libero enim molestie lorem, vitae porta tellus augue vel nunc. Duis eget dui ipsum. Aenean ornare augue a erat aliquet faucibus. Cras non justo id dui varius faucibus eget non ipsum.
Morbi ultrices urna augue, a suscipit nisl malesuada quis. Vivamus ut consequat tortor, nec tempor nisl. Nam accumsan condimentum tellus, et condimentum orci ullamcorper non. Aliquam id consectetur risus, sed tempus velit. Mauris leo sapien, pretium at mi a, placerat ornare elit. Nunc a velit eros. Sed et vestibulum libero, eu feugiat lorem.',

                'data_publicacao' => '2023-02-13',
                'id_usuarios' => 1
            ]);
        }


    }
}
