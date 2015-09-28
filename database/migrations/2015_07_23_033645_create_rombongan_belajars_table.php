<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRombonganBelajarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rombongan_belajars', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jurusan_id')->unsigned()->index();
            $table->foreign('jurusan_id')->references('id')->on('jurusans')->onUpdate('cascade')->onDelete('restrict');
            $table->integer('tahun_ajaran_id')->unsigned()->index();
            $table->foreign('tahun_ajaran_id')->references('id')->on('tahun_ajarans')->onUpdate('cascade')->onDelete('restrict');
            $table->integer('kelas_id')->unsigned()->index();
            $table->foreign('kelas_id')->references('id')->on('kelases')->onUpdate('cascade')->onDelete('restrict');
            $table->integer('ruangan_id')->unsigned()->index();
            $table->foreign('ruangan_id')->references('id')->on('ruangans')->onUpdate('cascade')->onDelete('restrict');
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
        Schema::drop('rombongan_belajars');
    }
}
