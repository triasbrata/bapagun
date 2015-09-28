<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWaliKelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wali_kelas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('guru_id')->unsigned()->index();
            $table->foreign('guru_id')->references('id')->on('gurus')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('rombongan_belajar_id')->unsigned()->index();
            $table->foreign('rombongan_belajar_id')->references('id')->on('rombongan_belajars')->onUpdate('cascade');
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
        Schema::drop('wali_kelas');
    }
}
