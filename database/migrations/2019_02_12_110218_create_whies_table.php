<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWhiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('whies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title_en');
            $table->string('title_de');
            $table->string('title_fr');
            $table->string('title_it');
            $table->string('title_es');
            $table->text('s_des_en');
            $table->text('s_des_de');
            $table->text('s_des_fr');
            $table->text('s_des_it');
            $table->text('s_des_es');
            $table->text('icon');
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
        Schema::dropIfExists('whies');
    }
}
