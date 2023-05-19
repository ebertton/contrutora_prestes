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
        Schema::create('sales_center', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('zip_code');
            $table->string('street');
            $table->integer('number');
            $table->string('complement')->nullable();
            $table->string('neighborhood');
            $table->string('state');
            $table->string('mail');
            $table->string('phone');
            $table->timestamps();
            $table->unsignedBigInteger('city')->index('sales_center_city_foreign');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales_center');
    }
};
