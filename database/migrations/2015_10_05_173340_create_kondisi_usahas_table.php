<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKondisiUsahasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kondisi_usahas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('unit_usaha_id')->unsigned();
            $table->foreign('unit_usaha_id')->references('id')->on('unit_usahas')->onDelete('restrict')->onUpdate('cascade');
            $table->string('tahun',4);
            $table->string('bulan',2);
            $table->integer('aset');
            $table->integer('omset');
            $table->string('pirt',50);
            $table->string('mn',50);
            $table->string('halal',50);
            $table->string('iso',50);
            $table->string('lain_lain',50);
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
        Schema::drop('kondisi_usahas');
    }
}
