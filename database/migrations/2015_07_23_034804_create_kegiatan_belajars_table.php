<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKegiatanBelajarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kegiatan_belajars', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rombongan_belajar_id')->unsigned()->index();
            $table->foreign('rombongan_belajar_id')->references('id')->on('rombongan_belajars')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('guru_mata_pelajaran_id')->unsigned()->index();
            $table->foreign('guru_mata_pelajaran_id')->references('id')->on('guru_mata_pelajarans')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::drop('kegiatan_belajars');
    }
}
