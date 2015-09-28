<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePegawaiMasaKerjasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai_masa_kerjas', function (Blueprint $table) {
            $table->integer('pegawai_id')->unsigned()->index();
            $table->foreign('pegawai_id')->references('id')->on('pegawais')->onUpdate('cascade')->onDelete('cascade');
            $table->string('jumlah_tahun_sk_terakhir',4);
            $table->string('jumlah_bulan_sk_terakhir',4);
            $table->string('jumlah_tahun_mk_terakhir',4);
            $table->string('jumlah_bulan_mk_terakhir',4);
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
        Schema::drop('pegawai_masa_kerjas');
    }
}
