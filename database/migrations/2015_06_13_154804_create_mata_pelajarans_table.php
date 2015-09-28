<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMataPelajaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mata_pelajarans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('label',50);
            $table->string('singkatan',25);
            $table->integer('kategori_mata_pelajaran_id')->unsigned()->index();
            $table->foreign('kategori_mata_pelajaran_id')->references('id')->on('kategori_mata_pelajarans')->onUpdate('cascade')->onDelete('restrict');
            $table->integer('jurusan_id')->unsigned()->index();
            $table->foreign('jurusan_id')->references('id')->on('jurusans')->onUpdate('cascade')->onDelete('restrict');
            $table->integer('kelas_id')->unsigned()->index();
            $table->foreign('kelas_id')->references('id')->on('kelases')->onUpdate('cascade')->onDelete('restrict'); 
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
        Schema::drop('mata_pelajarans');
    }
}
