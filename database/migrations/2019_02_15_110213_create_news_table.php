<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
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
            $table->longText('des_en');
            $table->longText('des_de');
            $table->longText('des_fr');
            $table->longText('des_it');
            $table->longText('des_es');
            $table->text('m_img');
            $table->text('img')->nullable();
            $table->integer('written_id')->unsigned();

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
        Schema::dropIfExists('news');
    }
}
