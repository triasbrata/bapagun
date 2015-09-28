<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiswaPaskaPendidikansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa_paska_pendidikans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('siswa_id')->unsigned()->index();
            $table->foreign('siswa_id')->references('id')->on('siswas')->onUpdate('cascade')->onDelete('cascade');
            $table->string('pendidikan');
            $table->string('nama_tempat_kerja');
            $table->string('tanggal_kerja');
            $table->string('penghasilan');
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
        Schema::drop('siswa_paska_pendidikans');
    }
}
