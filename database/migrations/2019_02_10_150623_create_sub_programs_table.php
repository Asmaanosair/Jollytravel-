<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_programs', function (Blueprint $table) {
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
            $table->integer('program_id')->unsigned();
            $table->integer('admin_program_id')->unsigned();
            $table->integer('active')->default(0);
            $table->string('sale');
            $table->string('price');
            $table->string('video');
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
        Schema::dropIfExists('sub_programs');
    }
}
