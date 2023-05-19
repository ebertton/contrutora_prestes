<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_content', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('about_video');
            $table->text('your_home');
            $table->string('your_home_image')->default('/storage/about/img-sobre.png');
            $table->text('mission');
            $table->text('vision');
            $table->text('values');
            $table->text('history');
            $table->text('our_enterprises');
            $table->text('life_institute_text');
            $table->string('life_institute_image_1');
            $table->string('life_institute_image_2');
            $table->string('ceo_name');
            $table->string('ceo_image');
            $table->text('ceo_history');
            $table->text('ceo_quote');
            $table->timestamps();
            $table->integer('cities')->default(0);
            $table->integer('enterprises_delivered')->default(0);
            $table->integer('housing_units')->default(0);
            $table->integer('direct_collaborators')->default(0);
            $table->integer('undirect_collaborators')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('about_content');
    }
};
