<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CuratorsTableCreate extends Migration
{
    /**
     * Run the migrations.
     *id	Имя	Фамилия	номер телефона	Страница ВК	Страница Instagram
     * @return void
     */
    public function up()
    {
        Schema::create('curators', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('surname');
            $table->string('phone')->nullable();
            $table->string('vk_acc')->nullable();
            $table->string('insta_acc')->nullable();
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
        Schema::dropIfExists('curators');
    }
}
