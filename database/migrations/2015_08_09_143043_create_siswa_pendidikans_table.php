<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiswaPendidikansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa_pendidikans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('siswa_id')->unsigned()->index();
            $table->foreign('siswa_id')->references('id')->on('siswas')->onUpdate('cascade')->onDelete('cascade');
            $table->string('lulusan_dari');
            $table->string('tanggal_sttb');
            $table->string('no_sttb');
            $table->integer('lama_belajar');
            $table->string('pindahan_dari');
            $table->string('jurusan_id');
            $table->string('kelas_id');
            $table->string('tanggal_masuk');
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
        Schema::drop('siswa_pendidikans');
    }
}
