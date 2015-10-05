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
            $table->string('nama_usaha',50);
            $table->string('keterangan',255);
            $table->string('telp',13);
            $table->string('email',35);
            $table->string('tipe_program',['mandiri','wub','ovop']);
            $table->integer('jenis_produk_id')->unsigned();
            $table->foreign('jenis_produk_id')->references('id')->on('jenis_produks')->onDelete('restrict')->onUpdate('cascade');
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
