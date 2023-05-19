<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Referral;

class ReferralsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $referral = new Referral;
        $referral->referral_text = 'Ao indicar os empreendimentos da Prestes, além de compartilhar a qualidade de vida que nossos imóveis entregam, você também é premiado: dinheiro na mão ou créditos para retirar prêmios em lojas virtuais.';
        $referral->referral_image = '/assets/img/img-indique.png';
        $referral->referral_url = 'https://conteudo.prestes.com/prestes-indique-e-ganhe-2022';
        $referral->save();

    }
}
