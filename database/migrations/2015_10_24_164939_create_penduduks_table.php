<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenduduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penduduks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_nik',16);
            $table->string('nama',35);
            $table->string('tempat_lahir',35);
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin',['1','2']);
            $table->enum('agama',['islam','protestant','katolik','hindu','buddha','kong wu chu']);
            $table->string('alamat');
            $table->integer('provinsi_id')->unsigned()->index();
            $table->foreign('provinsi_id')->references('id')->on('provinsis')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('kabupaten_id')->unsigned()->index();
            $table->foreign('kabupaten_id')->references('id')->on('kabupatens')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('kecamatan_id')->unsigned()->index();
            $table->foreign('kecamatan_id')->references('id')->on('kecamatans')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('desa_id')->unsigned()->index();
            $table->foreign('desa_id')->references('id')->on('desas')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::drop('penduduks');
    }
}
