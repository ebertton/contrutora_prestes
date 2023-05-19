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
        Schema::create('enterprises', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('video');
            $table->string('name');
            $table->text('describe')->nullable();
            $table->string('describe_title')->nullable();
            $table->text('prime_location_text')->nullable();
            $table->integer('parking_spaces');
            $table->integer('concierge24h');
            $table->string('benefits_image');
            $table->timestamps();
            $table->integer('zip_code');
            $table->string('street');
            $table->integer('number');
            $table->string('complement')->nullable();
            $table->string('neighborhood');
            $table->string('state');
            $table->unsignedBigInteger('city')->index('enterprises_city_foreign');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enterprises');
    }
};
