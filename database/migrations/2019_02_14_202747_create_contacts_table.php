<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->text('address_en');
            $table->text('address_de');
            $table->text('address_fr');
            $table->text('address_it');
            $table->text('address_es');
            $table->text('day_open');
            $table->text('time_open');
            $table->text('close');
            $table->string('fb');
            $table->string('tw');
            $table->string('img');
            $table->string('web');
            $table->string('phone');
            $table->string('email');
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
        Schema::dropIfExists('contacts');
    }
}
