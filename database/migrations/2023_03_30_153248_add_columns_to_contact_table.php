<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contact', function (Blueprint $table) {
            $table->string('titulo_principal_cards', 255)->nullable();
            $table->string('texto_trabalhe_conosco', 255)->nullable();
            $table->string('texto_nossos_terrenos', 255)->nullable();
            $table->string('texto_fornecedores', 255)->nullable();
            $table->string('texto_mao_obra', 255)->nullable();
            $table->string('texto_alo_conduta', 255)->nullable();
            $table->string('texto_privacidade_dados', 255)->nullable();
            $table->string('link_trabalhe_conosco', 255)->nullable();
            $table->string('link_nossos_terrenos', 255)->nullable();
            $table->string('link_fornecedores', 255)->nullable();
            $table->string('link_mao_obra', 255)->nullable();
            $table->string('link_alo_conduta', 255)->nullable();
            $table->string('link_privacidade_dados', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contact', function (Blueprint $table) {
            //
        });
    }
}
