<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePegawaiPendidikansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai_pendidikans', function (Blueprint $table) {
            $table->integer('pegawai_id')->unsigned()->index();
            $table->foreign('pegawai_id')->references('id')->on('pegawais')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('akta_id')->unsigned()->index();
            $table->foreign('akta_id')->references('id')->on('aktas')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('ijazah_id')->unsigned()->index();
            $table->foreign('ijazah_id')->references('id')->on('ijazahs')->onUpdate('cascade')->onDelete('cascade');
            $table->string('tahun_lulus',4);
            $table->string('nomor_ijazah');
            $table->string('jurusan');
            $table->string('nama_instansi_pendidikan');
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
        Schema::drop('pegawai_pendidikans');
    }
}
