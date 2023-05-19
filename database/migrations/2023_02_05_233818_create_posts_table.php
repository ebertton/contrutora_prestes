<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_tags')->nullable()->index('fk_posts_tags_id_tags');
            $table->string('titulo', 255)->nullable();
            $table->text('texto')->nullable();
            $table->date('data_publicacao')->nullable();
            $table->unsignedBigInteger('id_usuarios')->nullable()->index('fk_posts_users_id_usuarios');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
