<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CatsVaccinesTableCreate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cats_vaccines', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger ('cat_id');
            $table->unsignedBigInteger ('vaccine_id');
            $table->unsignedBigInteger('curator_id');
            $table->date('date_vaccine');
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
        Schema::dropIfExists('cats_vaccines');
    }
}
