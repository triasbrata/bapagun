<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SiswaKebutuhanKhusus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa_kebutuhan_khusus', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('siswa_id')->unsigned()->index();
            $table->foreign('siswa_id')->references('id')->on('siswas')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('kebutuhan_khusus_id')->unsigned()->index();
            $table->foreign('kebutuhan_khusus_id')->references('id')->on('kebutuhan_khususes')->onUpdate('cascade')->onDelete('restrict');
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
        Schema::drop('siswa_kebutuhan_khusus');
    }
}
