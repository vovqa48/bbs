<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CatsTableCreate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('date_birthday')->nullable();
            $table->string('photo')->nullable();
            $table->string('cat_story')->nullable();
            $table->string('cat_come_in')->nullable();
            $table->string('status')->nullable();
            $table->unsignedBigInteger('curator_id');
            $table->string('special_signs')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     **/
    public function down()
    {
        Schema::dropIfExists('cats');
    }
}
