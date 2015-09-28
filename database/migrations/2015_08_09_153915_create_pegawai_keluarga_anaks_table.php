<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePegawaiKeluargaAnaksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai_keluarga_anaks', function (Blueprint $table) {
            $table->integer('pegawai_id')->unsigned()->index();
            $table->foreign('pegawai_id')->references('id')->on('pegawais')->onUpdate('cascade')->onDelete('cascade');
            $table->string('nama',35);
            $table->string('tempat_lahir',35);
            $table->date('tanggal_lahir');
            $table->enum('gender',['L','P']);
            $table->string('sekolah',35);
            $table->integer('urutan');

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
        Schema::drop('pegawai_keluarga_anaks');
    }
}
