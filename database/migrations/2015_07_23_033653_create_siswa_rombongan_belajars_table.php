<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiswaRombonganBelajarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa_rombongan_belajars', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('siswa_id')->unsigned()->index();
            $table->foreign('siswa_id')->references('id')->on('siswas')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('rombongan_belajar_id')->unsigned()->index();
            $table->foreign('rombongan_belajar_id')->references('id')->on('rombongan_belajars')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::drop('siswa_rombongan_belajars');
    }
}
