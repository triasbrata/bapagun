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
            $table->string('telp',13);
            $table->text('keterangan');
            $table->string('alamat');
            $table->string('kordinat',35);
            $table->string('foto',40);
            $table->string('email',35);
            $table->string('desa_id',10);
            $table->foreign('desa_id')->references('id')->on('desas');
            $table->string('kecamatan_id',10);
            $table->foreign('kecamatan_id')->references('id')->on('kecamatans');
            $table->string('kabupaten_id',10);
            $table->foreign('kabupaten_id')->references('id')->on('kabupatens');
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
