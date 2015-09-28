<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePegawaiKeluargasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai_keluargas', function (Blueprint $table) {
            $table->integer('pegawai_id')->unsigned()->index();
            $table->foreign('pegawai_id')->references('id')->on('pegawais')->onUpdate('cascade')->onDelete('cascade');
            $table->string('nama_ayah',35);
            $table->string('nama_ibu',35);
            $table->enum('status_perkawinan',['kawin','belum kawin']);
            $table->date('tanggal_kawin');
            $table->string('nama_pasangan',35);
            $table->string('tempat_lahir_pasangan',25);
            $table->date('tanggal_lahir_pasangan');
            $table->string('pekerjaan_pasangan',15);
            $table->string('nip_pasangan',25);
            $table->char('gaji_pasangan');
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
        Schema::drop('pegawai_keluargas');
    }
}
