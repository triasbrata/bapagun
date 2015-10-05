<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('unit_usaha_id')->unsigned();
            $table->foreign('unit_usaha_id')->references('id')->on('unit_usahas')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nama',35);
            $table->string('keterangan',255);
            $table->string('kemasan',50);
            $table->string('foto',34);
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
        Schema::drop('produks');
    }
}
