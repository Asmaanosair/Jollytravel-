<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOurTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('our_teams', function (Blueprint $table) {
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
            $table->text('icon');
            $table->string('job_en');
            $table->string('job_de');
            $table->string('job_fr');
            $table->string('job_it');
            $table->string('job_es');
            $table->string('fb');
            $table->string('tw');
            $table->string('img');
            $table->string('insta');
            $table->string('vk');
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
        Schema::dropIfExists('our_teams');
    }
}
