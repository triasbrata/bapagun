<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PegawaiKebutuhanKhusus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai_kebutuhan_khusus', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pegawai_id')->unsigned()->index();
            $table->foreign('pegawai_id')->references('id')->on('pegawais')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('kebutuhan_khusus_id')->unsigned()->index();
            $table->foreign('kebutuhan_khusus_id')->references('id')->on('kebutuhan_khususes')->onUpdate('cascade');
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
        Schema::drop('pegawai_kebutuhan_khusus');
    }
}
