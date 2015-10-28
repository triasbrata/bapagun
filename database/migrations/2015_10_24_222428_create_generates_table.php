<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeneratesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('generates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rangking');
            $table->integer('penduduk_id')->unsigned()->index();
            $table->foreign('penduduk_id')->references('id')->on('penduduks')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('kecamatan_id')->unsigned()->index();
            $table->foreign('kecamatan_id')->references('id')->on('kecamatans')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('bantuan_id')->unsigned()->index();
            $table->foreign('bantuan_id')->references('id')->on('bantuans')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::drop('generates');
    }
}
