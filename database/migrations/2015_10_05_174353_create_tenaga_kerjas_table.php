<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTenagaKerjasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenaga_kerjas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('unit_usaha_id')->unsigned();
            $table->foreign('unit_usaha_id')->references('id')->on('unit_usahas')->onDelete('restrict')->onUpdate('cascade');
            $table->integer('pekerja_pria');
            $table->integer('pekerja_wanita');
            $table->integer('rata_rata_gaji');
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
        Schema::drop('tenaga_kerjas');
    }
}
