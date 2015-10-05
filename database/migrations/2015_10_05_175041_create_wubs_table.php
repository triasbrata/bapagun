<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWubsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wubs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',50);
            $table->string('nama_ketua');
            $table->string('jumlah_anggota');
            $table->string('foto');
            $table->string('kondisi');
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
        Schema::drop('wubs');
    }
}
