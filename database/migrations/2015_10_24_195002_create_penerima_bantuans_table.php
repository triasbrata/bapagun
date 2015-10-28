<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenerimaBantuansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penerima_bantuans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('penduduk_id')->unsigned()->index();
            $table->foreign('penduduk_id')->references('id')->on('penduduks')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('bantuan_id')->unsigned()->index();
            $table->foreign('bantuan_id')->references('id')->on('bantuans')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('kriteria_id')->unsigned()->index();
            $table->foreign('kriteria_id')->references('id')->on('kriterias')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('indikator_id')->unsigned()->index();
            $table->foreign('indikator_id')->references('id')->on('indikators')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::drop('penerima_bantuans');
    }
}
