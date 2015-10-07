<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnitUsahasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unit_usahas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama',50);
            $table->string('keterangan',255);
            $table->string('telp',13);
            $table->text('keterangan');
            $table->string('alamat');
            $table->string('kordinat',35);
            $table->string('foto',35);
            $table->string('email',35);
            $table->integer('village_id')->unsigned();
            $table->foreign('village_id')->references('id')->on('villages');
            $table->integer('district_id')->unsigned();
            $table->foreign('district_id')->references('id')->on('districts');
            $table->integer('regency_id')->unsigned();
            $table->foreign('regency_id')->references('id')->on('regencys');
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
        Schema::drop('unit_usahas');
    }
}
