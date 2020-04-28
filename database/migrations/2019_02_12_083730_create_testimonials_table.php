<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestimonialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testimonials', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_en');
            $table->string('name_de');
            $table->string('name_fr');
            $table->string('name_it');
            $table->string('name_es');
            $table->text('s_des_en');
            $table->text('s_des_de');
            $table->text('s_des_fr');
            $table->text('s_des_it');
            $table->text('s_des_es');
            $table->text('img');
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
        Schema::dropIfExists('testimonials');
    }
}
