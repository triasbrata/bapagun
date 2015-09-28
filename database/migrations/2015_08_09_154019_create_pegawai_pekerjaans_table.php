<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePegawaiPekerjaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai_pekerjaans', function (Blueprint $table) {
            $table->integer('pegawai_id')->unsigned()->index();
            $table->foreign('pegawai_id')->references('id')->on('pegawais')->onUpdate('cascade')->onDelete('cascade');
            $table->string('status');
            $table->integer('pangkat_pegawais_id')->unsigned()->index();
            $table->foreign('pangkat_pegawais_id')->references('id')->on('pangkat_pegawais')->onUpdate('cascade')->onDelete('restrict');
            $table->integer('golongan_id')->unsigned()->index();
            $table->foreign('golongan_id')->references('id')->on('golongan_pegawais')->onUpdate('cascade')->onDelete('restrict');
            $table->integer('jabatan_id')->unsigned()->index();
            $table->foreign('jabatan_id')->references('id')->on('jabatans')->onUpdate('cascade')->onDelete('restrict');
            $table->date('tmt_awal');
            $table->date('tmt_akhir');
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
        Schema::drop('pegawai_pekerjaans');
    }
}
