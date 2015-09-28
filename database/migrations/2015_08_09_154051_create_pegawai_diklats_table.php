<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePegawaiDiklatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai_diklats', function (Blueprint $table) {
            $table->integer('pegawai_id')->unsigned()->index();
            $table->foreign('pegawai_id')->references('id')->on('pegawais')->onUpdate('cascade')->onDelete('cascade');
            $table->string('nama');
            $table->string('penyelenggara');
            $table->string('tempat');
            $table->string('tahun',4);
            $table->string('lama',4);
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
        Schema::drop('pegawai_diklats');
    }
}
