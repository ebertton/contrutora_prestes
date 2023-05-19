<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Achievement;

class AchievementsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $achievement = new Achievement;
        $achievement->year = 2009;
        $achievement->achievement = 'Surge a Prestes, com sede em Castro, nos Campos Gerais.';
        $achievement->save();

        $achievement = new Achievement;
        $achievement->year = 2010;
        $achievement->achievement = 'Lançamento do 1º empreendimento, Residencial Eldorado, em Carambeí.';
        $achievement->save();

        $achievement = new Achievement;
        $achievement->year = 2011;
        $achievement->achievement = 'Lançamento do Condomínio Vivace, em Castro-PR, e do Residencial Eldorado II, em Carambeí.';
        $achievement->save();

        $achievement = new Achievement;
        $achievement->year = 2012;
        $achievement->achievement = 'Lançamento dos Residenciais Tomie Nagatani, em Rolândia, e Ulysses Guimarães, em Cambé.';
        $achievement->save();

        $achievement = new Achievement;
        $achievement->year = 2013;
        $achievement->achievement = 'Lançamento dos Residenciais Campo Belo em Carambeí, e Jardim das Américas em Irati. Lançamento dos Condomínios Vittace, em Ponta Grossa, e Vittace, em Cambé.';
        $achievement->save();

        $achievement = new Achievement;
        $achievement->year = 2014;
        $achievement->achievement = 'Lançamento do Loteamento, em Castro, e dos Residenciais Solo Sagrado, em Apucarana; Campo Belo, em Tibagi.';
        $achievement->save();

        $achievement = new Achievement;
        $achievement->year = 2015;
        $achievement->achievement = 'Lançamento do Condomínio Vittace Uvaranas - Ponta Grossa.';
        $achievement->save();

        $achievement = new Achievement;
        $achievement->year = 2016;
        $achievement->achievement = 'Lançamento de Belos Oficinas e do lake, nosso primeiro empreendimento de médio padrão, em Castro.';
        $achievement->save();

        $achievement = new Achievement;
        $achievement->year = 2017;
        $achievement->achievement = 'Lançamento dos Condomínios Vista Oficinas; Vittace Jardim Carvalho e Vittace oficinas, em ponta Grossa; e Vittace Guarapuava.';
        $achievement->save();

        $achievement = new Achievement;
        $achievement->year = 2018;
        $achievement->achievement = 'Lançamento Vista Cilla, em Guarapuava e Viva Londrina.';
        $achievement->save();

        $achievement = new Achievement;
        $achievement->year = 2019;
        $achievement->achievement = 'Lançamento dos Condomínios Inova, Vittace Up, Vista Uvaranas e Vista Santa Paula, em Ponta Grossa; e Vittace Castro, em Castro.';
        $achievement->save();

        $achievement = new Achievement;
        $achievement->year = 2020;
        $achievement->achievement = 'Lançamento de sete empreendimentos: Vittace Guarapuava, Viverti Apucarana, Viva Princesa, Vittace Reserva, Eleva Arvoredo e Campo Belo Tibogi.';
        $achievement->save();

        $achievement = new Achievement;
        $achievement->year = 2021;
        $achievement->achievement = 'Lançamento Vittace Sabará, em Ponta Grossa, e do Vittace Boulevard, em Londrina.';
        $achievement->save();

        $achievement = new Achievement;
        $achievement->year = 2022;
        $achievement->achievement = 'Lançamento do Vista Batel, em Guarapuava, e do Vittace Alameda, em São José dos Pinhais.';
        $achievement->save();
    }
}
