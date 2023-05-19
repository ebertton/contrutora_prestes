<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Enterprise;
use App\Models\Image;
use App\Models\Apartment;
use App\Models\Benefit;
use App\Models\City;
use App\Models\SalesCenter;
use App\Models\Status;

class EnterpriseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $city = new City;
        $city->city_name = 'Curitiba';
        $city->city_describe = 'Curitiba é a capital do Paraná e a maior cidade do Sul do país, com quase 2 milhões de habitantes. É referência em qualidade de vida sendo eleita a cidade mais inteligente do Brasil. Mesmo com todos os investimentos em inovação e infraestrutura, a capital paranaense mantém o clima de cidade do interior. A cidade também se destaca pelo eficiente transporte público e pela mobilidade urbana, além de uma forte produção artística. Tudo isso faz de Curitiba uma cidade repleta de facilidades e atrações, com excelentes serviços para os moradores.';
        $city->city_banner = '/assets/img/img-curitiba.png';
        $city->save();

        $salesCenter = new SalesCenter;
        $salesCenter->city = $city->id;
        $salesCenter->zip_code = 81230170;
        $salesCenter->street = 'Rua Renato Polatti';
        $salesCenter->number = 703;
        $salesCenter->complement = '';
        $salesCenter->neighborhood = 'Campo Comprido';
        $salesCenter->state = 'PR';
        $salesCenter->mail = 'contato@prestes.com';
        $salesCenter->phone = '+55 (42) 99845 0001';
        $salesCenter->save();

        $enterprise = new Enterprise;
        $enterprise->video = 'upOgbjAviac';
        $enterprise->name = 'ELEVA ARVOREDO';
        $enterprise->parking_spaces = 1;
        $enterprise->concierge24h = 1;
        $enterprise->benefits_image = '/assets/img/img-infos-empreendimento.png';
        $enterprise->zip_code = 81230170;
        $enterprise->street = 'Rua Renato Polatti';
        $enterprise->number = 3175;
        $enterprise->complement = 'de 2195 a 3899 - lado ímpar';
        $enterprise->neighborhood = 'Campo Comprido';
        $enterprise->state = 'PR';
        $enterprise->describe = '';
        $enterprise->describe_title = '';
        $enterprise->prime_location_text = '';
        $enterprise->city = $city->id;
        $enterprise->save();

        $status = new Status;
        $status->enterprise_id = $enterprise->id;
        $status->status = 1;
        $status->status_image = '/assets/img/img-status.png';
        $status->status_progress = 0;
        $status->save();

        for ($i = 1; $i <= 27; $i++) {
            $image = new Image;
            $image->enterprise_id = $enterprise->id;
            $image->type = (in_array($i, [2, 3, 6])) ? 1 : 0;
            $image->image = '/assets/img/empreendimentos/eleva-arvoredo/img' . $i . '.webp';
            $image->save();
        }

        $image = new Image;
        $image->enterprise_id = $enterprise->id;
        $image->type = 2;
        $image->image = '/assets/img/empreendimentos/eleva-arvoredo/banner-template.png';
        $image->save();

        $apartment = new Apartment;
        $apartment->enterprise_id = $enterprise->id;
        $apartment->dormitories = 1;
        $apartment->floor_plan = '/assets/img/empreendimentos/eleva-arvoredo/plantas/planta1.webp';
        $apartment->square_meters = 45.39;
        $apartment->suites = 1;
        $apartment->save();

        $apartment = new Apartment;
        $apartment->enterprise_id = $enterprise->id;
        $apartment->dormitories = 2;
        $apartment->floor_plan = '/assets/img/empreendimentos/eleva-arvoredo/plantas/planta2.webp';
        $apartment->square_meters = 45.39;
        $apartment->suites = 1;
        $apartment->save();

        $apartment = new Apartment;
        $apartment->enterprise_id = $enterprise->id;
        $apartment->dormitories = 3;
        $apartment->floor_plan = '/assets/img/empreendimentos/eleva-arvoredo/plantas/planta3.webp';
        $apartment->square_meters = 58.13;
        $apartment->suites = 1;
        $apartment->save();

        $benefitsFields = array('Academia', 'Praça de Treino', 'Praça de Jogos', 'Redário', 'Atelier Gourmet', 'Salão de Festas', 'Parquinho', 'Espaço Melhor Amigo', 'Quadra Esportiva');

        foreach ($benefitsFields as $key => $field) {
            $benefit = new Benefit;
            $benefit->enterprise_id = $enterprise->id;
            $benefit->key = $key + 1;
            $benefit->text = $field;
            $benefit->save();
        }


        /* Cambé */
        $city = new City;
        $city->city_name = 'Cambé';
        $city->city_describe = 'Cambé é um município da região metropolitana de Londrina, com agricultura voltada à soja e um rico parque industrial, além de se destacar pelo turismo, em parques e museus. Uma cidade com clima de interior, mas que fica próxima a cidades maiores, perfeita para você e sua família passarem os melhores momentos juntos.';
        $city->city_banner = '/assets/img/img-cambe.png';
        $city->save();

        $salesCenter = new SalesCenter;
        $salesCenter->city = $city->id;
        $salesCenter->zip_code = 86181170;
        $salesCenter->street = 'Rua Carlos Sawade';
        $salesCenter->number = 408;
        $salesCenter->complement = 'Super Muffato Sawade';
        $salesCenter->neighborhood = 'Centro';
        $salesCenter->state = 'PR';
        $salesCenter->mail = 'contato@prestes.com';
        $salesCenter->phone = '+55 11 1234 5678';
        $salesCenter->save();


        $enterprise = new Enterprise;
        $enterprise->video = 'swLuOa6kiBE';
        $enterprise->name = 'VITTACE RESERVA';
        $enterprise->parking_spaces = 1;
        $enterprise->concierge24h = 1;
        $enterprise->benefits_image = '/assets/img/img-infos-empreendimento.png';
        $enterprise->zip_code = 86181310;
        $enterprise->street = 'Av. José Bonifácio';
        $enterprise->number = 250;
        $enterprise->complement = '';
        $enterprise->neighborhood = 'Vila Atalaia';
        $enterprise->state = 'PR';
        $enterprise->describe = '';
        $enterprise->describe_title = '';
        $enterprise->prime_location_text = '';
        $enterprise->city = $city->id;
        $enterprise->save();

        $status = new Status;
        $status->enterprise_id = $enterprise->id;
        $status->status = 2;
        $status->status_image = '/assets/img/img-status.png';
        $status->status_progress = 0;
        $status->save();

        for ($i = 1; $i <= 11; $i++) {
            $image = new Image;
            $image->enterprise_id = $enterprise->id;
            $image->type = (in_array($i, [2, 3, 6])) ? 1 : 0;
            $image->image = '/assets/img/empreendimentos/vittace-reserva/img' . $i . '.webp';
            $image->save();
        }

        $image = new Image;
        $image->enterprise_id = $enterprise->id;
        $image->type = 2;
        $image->image = '/assets/img/empreendimentos/vittace-reserva/banner-template.png';
        $image->save();

        $apartment = new Apartment;
        $apartment->enterprise_id = $enterprise->id;
        $apartment->dormitories = 1;
        $apartment->floor_plan = '/assets/img/empreendimentos/vittace-reserva/plantas/planta1.webp';
        $apartment->square_meters = 45.39;
        $apartment->suites = 0;
        $apartment->save();

        $apartment = new Apartment;
        $apartment->enterprise_id = $enterprise->id;
        $apartment->dormitories = 2;
        $apartment->floor_plan = '/assets/img/empreendimentos/vittace-reserva/plantas/planta2.webp';
        $apartment->square_meters = 45.39;
        $apartment->suites = 0;
        $apartment->save();

        $apartment = new Apartment;
        $apartment->enterprise_id = $enterprise->id;
        $apartment->dormitories = 3;
        $apartment->floor_plan = '/assets/img/empreendimentos/vittace-reserva/plantas/planta3.webp';
        $apartment->square_meters = 58.13;
        $apartment->suites = 0;
        $apartment->save();

        $benefitsFields = array('Churrasqueira', 'Espaço Pet', 'Piscina', 'Salão de Jogos', 'Salão de festas');

        foreach ($benefitsFields as $key => $field) {
            $benefit = new Benefit;
            $benefit->enterprise_id = $enterprise->id;
            $benefit->key = $key + 1;
            $benefit->text = $field;
            $benefit->save();
        }


        $city = new City;
        $city->city_name = 'Castro';
        $city->city_describe = 'Castro é um município paranaense que fica às margens do rio Iapó, com grande potencial turístico por estar localizado próximo a cânions e aos Campos Gerais. A cidade conta com uma infraestrutura completa, mas, ao mesmo tempo, é tranquila para se viver. É uma das maiores produtoras agropecuárias do estado e uma das principais bacias leiteiras do país em qualidade genética e produtividade. Castro surpreende não apenas como uma cidade tranquila para morar, mas também pela riqueza de sua história e de seus moradores, além das belezas naturais.';
        $city->city_banner = '/assets/img/img-castro.png';
        $city->save();

        $salesCenter = new SalesCenter;
        $salesCenter->city = $city->id;
        $salesCenter->zip_code = 84165120;
        $salesCenter->street = 'Rua Cipriano Marques de Souza';
        $salesCenter->number = 32;
        $salesCenter->complement = '';
        $salesCenter->neighborhood = 'Centro';
        $salesCenter->state = 'PR';
        $salesCenter->mail = 'contato@prestes.com';
        $salesCenter->phone = '+55 (42) 99845 0001';
        $salesCenter->save();

        $enterprise = new Enterprise;
        $enterprise->video = 'jtu0t4kGerk';
        $enterprise->name = 'VITTACE CASTRO';
        $enterprise->parking_spaces = 1;
        $enterprise->concierge24h = 0;
        $enterprise->benefits_image = '/assets/img/img-infos-empreendimento.png';
        $enterprise->zip_code = 84168260;
        $enterprise->street = 'Rua Dr. Heráclio Mendes de Camargo';
        $enterprise->number = 0;
        $enterprise->complement = '';
        $enterprise->neighborhood = 'Vila Santa Cruz';
        $enterprise->state = 'PR';
        $enterprise->describe = '';
        $enterprise->describe_title = '';
        $enterprise->prime_location_text = '';
        $enterprise->city = $city->id;
        $enterprise->save();

        $status = new Status;
        $status->enterprise_id = $enterprise->id;
        $status->status = 6;
        $status->status_image = '/assets/img/img-status.png';
        $status->status_progress = 0;
        $status->save();

        for ($i = 1; $i <= 13; $i++) {
            $image = new Image;
            $image->enterprise_id = $enterprise->id;
            $image->type = (in_array($i, [2, 3, 6])) ? 1 : 0;
            $image->image = '/assets/img/empreendimentos/vittace-castro/img' . $i . '.webp';
            $image->save();
        }

        $image = new Image;
        $image->enterprise_id = $enterprise->id;
        $image->type = 2;
        $image->image = '/assets/img/empreendimentos/vittace-castro/banner-template.png';
        $image->save();

        $apartment = new Apartment;
        $apartment->enterprise_id = $enterprise->id;
        $apartment->dormitories = 1;
        $apartment->floor_plan = '/assets/img/empreendimentos/vittace-castro/plantas/planta1.webp';
        $apartment->square_meters = 45.39;
        $apartment->suites = 1;
        $apartment->save();

        $apartment = new Apartment;
        $apartment->enterprise_id = $enterprise->id;
        $apartment->dormitories = 2;
        $apartment->floor_plan = '/assets/img/empreendimentos/vittace-castro/plantas/planta2.webp';
        $apartment->square_meters = 45.39;
        $apartment->suites = 1;
        $apartment->save();

        $apartment = new Apartment;
        $apartment->enterprise_id = $enterprise->id;
        $apartment->dormitories = 3;
        $apartment->floor_plan = '/assets/img/empreendimentos/vittace-castro/plantas/planta3.webp';
        $apartment->square_meters = 58.13;
        $apartment->suites = 1;
        $apartment->save();

        $benefitsFields = array('Espaço kids', 'Espaço pet', 'Espaço zen', 'Quadra poliesportiva', 'Salão de festas e Salão de jogos', 'Academia ao ar livre', 'Playground', 'Bicicletário', 'Pista de mini-golf', 'redário', 'Praça de jogos', 'Fogueira e Pomar');

        foreach ($benefitsFields as $key => $field) {
            $benefit = new Benefit;
            $benefit->enterprise_id = $enterprise->id;
            $benefit->key = $key + 1;
            $benefit->text = $field;
            $benefit->save();
        }


        $city = new City;
        $city->city_name = 'Guarapuava';
        $city->city_describe = 'Guarapuava é uma cidade com mais de 180 mil habitantes, que oferece toda a infraestrutura para sua família viver. Considerada um polo regional de desenvolvimento, com forte influência sobre os municípios vizinhos, faz parte do corredor do Mercosul, entre os municípios de Foz do Iguaçu e Curitiba. A cidade oferece educação de qualidade, do jardim de infância ao ensino superior, além de uma economia diversificada para diversos tipos de investimentos. Você pode morar bem em um local tranquilo e ainda estar perto de diversos parques, praças, casarões antigos, igrejas e capelas, além de belezas naturais como quedas d’água livres e cânions.';
        $city->city_banner = '/assets/img/img-guarapuava.png';
        $city->save();

        $salesCenter = new SalesCenter;
        $salesCenter->city = $city->id;
        $salesCenter->zip_code = 85015550;
        $salesCenter->street = 'Rua Gerânios';
        $salesCenter->number = 390;
        $salesCenter->complement = '';
        $salesCenter->neighborhood = 'Batel';
        $salesCenter->state = 'PR';
        $salesCenter->mail = 'contato@prestes.com';
        $salesCenter->phone = '+55 (42) 99845 0001';
        $salesCenter->save();


        $enterprise = new Enterprise;
        $enterprise->video = 'VfZDc7xw_ss';
        $enterprise->name = 'VITTACE GUARAPUAVA';
        $enterprise->parking_spaces = 1;
        $enterprise->concierge24h = 0;
        $enterprise->benefits_image = '/assets/img/img-infos-empreendimento.png';
        $enterprise->zip_code = 85022470;
        $enterprise->street = 'Tv. Arlíndo Antunes de Almeida';
        $enterprise->number = 566;
        $enterprise->complement = '';
        $enterprise->neighborhood = 'Boqueirão';
        $enterprise->state = 'PR';
        $enterprise->describe = '';
        $enterprise->describe_title = '';
        $enterprise->prime_location_text = '';
        $enterprise->city = $city->id;
        $enterprise->save();

        $status = new Status;
        $status->enterprise_id = $enterprise->id;
        $status->status = 6;
        $status->status_image = '/assets/img/img-status.png';
        $status->status_progress = 0;
        $status->save();

        for ($i = 1; $i <= 24; $i++) {
            $image = new Image;
            $image->enterprise_id = $enterprise->id;
            $image->type = (in_array($i, [2, 3, 6])) ? 1 : 0;
            $image->image = '/assets/img/empreendimentos/vittace-guarapuava/img' . $i . '.webp';
            $image->save();
        }

        $image = new Image;
        $image->enterprise_id = $enterprise->id;
        $image->type = 2;
        $image->image = '/assets/img/empreendimentos/vittace-guarapuava/banner-template.png';
        $image->save();

        $apartment = new Apartment;
        $apartment->enterprise_id = $enterprise->id;
        $apartment->dormitories = 1;
        $apartment->floor_plan = '/assets/img/empreendimentos/vittace-guarapuava/plantas/planta1.webp';
        $apartment->square_meters = 45.39;
        $apartment->suites = 1;
        $apartment->save();

        $apartment = new Apartment;
        $apartment->enterprise_id = $enterprise->id;
        $apartment->dormitories = 2;
        $apartment->floor_plan = '/assets/img/empreendimentos/vittace-guarapuava/plantas/planta2.webp';
        $apartment->square_meters = 45.39;
        $apartment->suites = 1;
        $apartment->save();

        $apartment = new Apartment;
        $apartment->enterprise_id = $enterprise->id;
        $apartment->dormitories = 3;
        $apartment->floor_plan = '/assets/img/empreendimentos/vittace-guarapuava/plantas/planta3.webp';
        $apartment->square_meters = 58.13;
        $apartment->suites = 1;
        $apartment->save();

        $benefitsFields = array('Quadra de vôlei de areia', 'Playground', 'Salão de festas', 'Salão de jogos', 'Churrasqueiras externas', 'Redário e horta comunitária');

        foreach ($benefitsFields as $key => $field) {
            $benefit = new Benefit;
            $benefit->enterprise_id = $enterprise->id;
            $benefit->key = $key + 1;
            $benefit->text = $field;
            $benefit->save();
        }


        $city = new City;
        $city->city_name = 'Ponta Grossa';
        $city->city_describe = 'Quarto município mais populoso do Paraná, Ponta Grossa oferece muitos atributos positivos para quem quer viver com qualidade. A cidade tem uma série de atrativos naturais e concilia seu crescimento ao respeito pelo meio ambiente. São inúmeras trilhas e cachoeiras para curtir a natureza pertinho de você. É uma cidade com infraestrutura completa e oferece muita qualidade de vida.';
        $city->city_banner = '/assets/img/img-ponta-grossa.png';
        $city->save();

        $salesCenter = new SalesCenter;
        $salesCenter->city = $city->id;
        $salesCenter->zip_code = 84010010;
        $salesCenter->street = 'Rua Doutor Colares';
        $salesCenter->number = 215;
        $salesCenter->complement = '';
        $salesCenter->neighborhood = 'Centro';
        $salesCenter->state = 'PR';
        $salesCenter->mail = 'contato@prestes.com';
        $salesCenter->phone = '+55 (42) 99845 0001';
        $salesCenter->save();

        $enterprise = new Enterprise;
        $enterprise->video = 'qWeQJvPSeYA';
        $enterprise->name = 'VITTACE OFICINAS';
        $enterprise->parking_spaces = 1;
        $enterprise->concierge24h = 0;
        $enterprise->benefits_image = '/assets/img/img-infos-empreendimento.png';
        $enterprise->zip_code = 85022470;
        $enterprise->street = 'Colonia Dona Luiza';
        $enterprise->number = 1111;
        $enterprise->complement = '';
        $enterprise->neighborhood = 'Oficinas';
        $enterprise->state = 'PR';
        $enterprise->describe = '';
        $enterprise->describe_title = '';
        $enterprise->prime_location_text = '';
        $enterprise->city = $city->id;
        $enterprise->save();

        $status = new Status;
        $status->enterprise_id = $enterprise->id;
        $status->status = 1;
        $status->status_image = '/assets/img/img-status.png';
        $status->status_progress = 0;
        $status->save();

        for ($i = 1; $i <= 14; $i++) {
            $image = new Image;
            $image->enterprise_id = $enterprise->id;
            $image->type = (in_array($i, [2, 3, 6])) ? 1 : 0;
            $image->image = '/assets/img/empreendimentos/vittace-oficinas/img' . $i . '.webp';
            $image->save();
        }

        $image = new Image;
        $image->enterprise_id = $enterprise->id;
        $image->type = 2;
        $image->image = '/assets/img/empreendimentos/vittace-oficinas/banner-template.png';
        $image->save();

        $apartment = new Apartment;
        $apartment->enterprise_id = $enterprise->id;
        $apartment->dormitories = 1;
        $apartment->floor_plan = '/assets/img/empreendimentos/vittace-oficinas/plantas/planta1.webp';
        $apartment->square_meters = 40.95;
        $apartment->suites = 1;
        $apartment->save();

        $apartment = new Apartment;
        $apartment->enterprise_id = $enterprise->id;
        $apartment->dormitories = 2;
        $apartment->floor_plan = '/assets/img/empreendimentos/vittace-oficinas/plantas/planta2.webp';
        $apartment->square_meters = 48.50;
        $apartment->suites = 1;
        $apartment->save();

        $apartment = new Apartment;
        $apartment->enterprise_id = $enterprise->id;
        $apartment->dormitories = 3;
        $apartment->floor_plan = '/assets/img/empreendimentos/vittace-oficinas/plantas/planta3.webp';
        $apartment->square_meters = 64.22;
        $apartment->suites = 1;
        $apartment->save();

        $benefitsFields = array('2 Espaços gourmet', 'Espaço kids', 'Praça zen', 'Redário', 'Crossfit', 'Quadra esportiva', 'Quadra de vôlei de areia', 'Arquibancada', 'Salão de jogos completo', '2 Churrasqueiras completas');

        foreach ($benefitsFields as $key => $field) {
            $benefit = new Benefit;
            $benefit->enterprise_id = $enterprise->id;
            $benefit->key = $key + 1;
            $benefit->text = $field;
            $benefit->save();
        }


        $city = new City;
        $city->city_name = 'Londrina';
        $city->city_describe = 'Conhecida como pequena Londres, é a segunda cidade mais populosa do Paraná. O município é considerado um importante eixo de ligação entre a região sul e sudeste, se destacando como um relevante centro urbano, econômico, industrial e financeiro. Londrina também é considerada um polo do ensino superior, com quase 30 centros de estudo, alguns deles referência no Brasil. Em Londrina, sua família contará com um ambiente moderno, dinâmico e desenvolvido, mas que mantém suas raízes culturais e preserva o meio ambiente, por estar cercada de Mata Atlântica.';
        $city->city_banner = '/assets/img/img-londrina.png';
        $city->save();

        $salesCenter = new SalesCenter;
        $salesCenter->city = $city->id;
        $salesCenter->zip_code = 86079225;
        $salesCenter->street = 'Avenida Américo Deolindo Garla';
        $salesCenter->number = 224;
        $salesCenter->complement = '';
        $salesCenter->neighborhood = 'Pacaembu';
        $salesCenter->state = 'PR';
        $salesCenter->mail = 'contato@prestes.com';
        $salesCenter->phone = '+55 (42) 99845 0001';
        $salesCenter->save();

        $salesCenter = new SalesCenter;
        $salesCenter->city = $city->id;
        $salesCenter->zip_code = 86027750;
        $salesCenter->street = 'Avenida Theodoro Victorelli';
        $salesCenter->number = 150;
        $salesCenter->complement = 'até 698/699';
        $salesCenter->neighborhood = 'Carlota';
        $salesCenter->state = 'PR';
        $salesCenter->mail = 'contato@prestes.com';
        $salesCenter->phone = '+55 (42) 99845 0001';
        $salesCenter->save();


        $enterprise = new Enterprise;
        $enterprise->video = '0i5Muzv_zk8';
        $enterprise->name = 'VIVA LONDRINA';
        $enterprise->parking_spaces = 1;
        $enterprise->concierge24h = 0;
        $enterprise->benefits_image = '/assets/img/img-infos-empreendimento.png';
        $enterprise->zip_code = 86081538;
        $enterprise->street = 'Av. Rosalvo Marques Bonfim';
        $enterprise->number = 889;
        $enterprise->complement = '';
        $enterprise->neighborhood = 'Parigot De Souza';
        $enterprise->state = 'PR';
        $enterprise->describe = '';
        $enterprise->describe_title = '';
        $enterprise->prime_location_text = '';
        $enterprise->city = $city->id;
        $enterprise->save();

        $status = new Status;
        $status->enterprise_id = $enterprise->id;
        $status->status = 4;
        $status->status_image = '/assets/img/img-status.png';
        $status->status_progress = 0;
        $status->save();

        for ($i = 1; $i <= 14; $i++) {
            $image = new Image;
            $image->enterprise_id = $enterprise->id;
            $image->type = (in_array($i, [2, 3, 6])) ? 1 : 0;
            $image->image = '/assets/img/empreendimentos/vittace-oficinas/img' . $i . '.webp';
            $image->save();
        }

        $image = new Image;
        $image->enterprise_id = $enterprise->id;
        $image->type = 2;
        $image->image = '/assets/img/empreendimentos/vittace-oficinas/banner-template.png';
        $image->save();

        $apartment = new Apartment;
        $apartment->enterprise_id = $enterprise->id;
        $apartment->dormitories = 2;
        $apartment->floor_plan = '/assets/img/empreendimentos/vittace-oficinas/plantas/planta1.webp';
        $apartment->square_meters = 58.65;
        $apartment->suites = 1;
        $apartment->save();

        $apartment = new Apartment;
        $apartment->enterprise_id = $enterprise->id;
        $apartment->dormitories = 3;
        $apartment->floor_plan = '/assets/img/empreendimentos/vittace-oficinas/plantas/planta2.webp';
        $apartment->square_meters = 66.08;
        $apartment->suites = 1;
        $apartment->save();


        $benefitsFields = array('Piscina adulto e infantil', 'Àrea fitness', 'Salão de festas e Salão de jogos', 'Redário', 'Playground', 'Espaço kids', 'Quadra esportiva', 'Tênis de mesa', 'Churrasqueira ao ar livre', 'Praça costela fogo de chão');

        foreach ($benefitsFields as $key => $field) {
            $benefit = new Benefit;
            $benefit->enterprise_id = $enterprise->id;
            $benefit->key = $key + 1;
            $benefit->text = $field;
            $benefit->save();
        }


        $city = new City;
        $city->city_name = 'São José dos Pinhais';
        $city->city_describe = 'Quarto município mais populoso do Paraná, Ponta Grossa oferece muitos atributos positivos para quem quer viver com qualidade. A cidade tem uma série de atrativos naturais e concilia seu crescimento ao respeito pelo meio ambiente. São inúmeras trilhas e cachoeiras para curtir a natureza pertinho de você. É uma cidade com infraestrutura completa e oferece muita qualidade de vida.';
        $city->city_banner = '/assets/img/img-sao-jose-dos-pinhais.png';
        $city->save();


        $salesCenter = new SalesCenter;
        $salesCenter->city = $city->id;
        $salesCenter->zip_code = 83015492;
        $salesCenter->street = 'Alameda Bom Pastor';
        $salesCenter->number = 665;
        $salesCenter->complement = '';
        $salesCenter->neighborhood = 'Ouro Fino';
        $salesCenter->state = 'PR';
        $salesCenter->mail = 'contato@prestes.com';
        $salesCenter->phone = '(42) 99845 0001';
        $salesCenter->save();

        $enterprise = new Enterprise;
        $enterprise->video = 'H581uBW0D4U';
        $enterprise->name = 'VITTACE ALAMEDA';
        $enterprise->parking_spaces = 1;
        $enterprise->concierge24h = 1;
        $enterprise->benefits_image = '/assets/img/img-infos-empreendimento.png';
        $enterprise->zip_code = 83015492;
        $enterprise->street = 'Alameda Bom Pastor';
        $enterprise->number = 665;
        $enterprise->complement = '';
        $enterprise->neighborhood = 'Ouro Fino';
        $enterprise->state = 'PR';
        $enterprise->describe = '';
        $enterprise->describe_title = '';
        $enterprise->prime_location_text = '';
        $enterprise->city = $city->id;
        $enterprise->save();

        $status = new Status;
        $status->enterprise_id = $enterprise->id;
        $status->status = 4;
        $status->status_image = '/assets/img/img-status.png';
        $status->status_progress = 0;
        $status->save();

        for ($i = 1; $i <= 9; $i++) {
            $image = new Image;
            $image->enterprise_id = $enterprise->id;
            $image->type = (in_array($i, [2, 3, 6])) ? 1 : 0;
            $image->image = '/assets/img/empreendimentos/vittace-alameda/img' . $i . '.webp';
            $image->save();
        }

        $image = new Image;
        $image->enterprise_id = $enterprise->id;
        $image->type = 2;
        $image->image = '/assets/img/empreendimentos/vittace-alameda/banner-template.png';
        $image->save();

        $apartment = new Apartment;
        $apartment->enterprise_id = $enterprise->id;
        $apartment->dormitories = 2;
        $apartment->floor_plan = '/assets/img/empreendimentos/vittace-alameda/plantas/planta1.webp';
        $apartment->square_meters = 58.65;
        $apartment->suites = 1;
        $apartment->save();

        $apartment = new Apartment;
        $apartment->enterprise_id = $enterprise->id;
        $apartment->dormitories = 3;
        $apartment->floor_plan = '/assets/img/empreendimentos/vittace-alameda/plantas/planta2.webp';
        $apartment->square_meters = 66.08;
        $apartment->suites = 1;
        $apartment->save();


        $benefitsFields = array('Playground', 'Bicicletário', 'Salão de festas', 'Praça de jogos', 'Praça Uber', 'Quadra esportiva', 'Praça fitness', 'Espaço pet');

        foreach ($benefitsFields as $key => $field) {
            $benefit = new Benefit;
            $benefit->enterprise_id = $enterprise->id;
            $benefit->key = $key + 1;
            $benefit->text = $field;
            $benefit->save();
        }


    }
}
