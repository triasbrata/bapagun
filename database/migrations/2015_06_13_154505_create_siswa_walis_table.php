<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiswaWalisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa_walis', function (Blueprint $table) {
            $table->integer('siswa_id')->unsigned()->index();
            $table->foreign('siswa_id')->references('id')->on('siswas')->onUpdate('cascade')->onDelete('cascade');
            $table->string('nama',25);
            $table->date('tanggal_lahir');
            $table->string('tempat_lahir');
            $table->enum('kewarganegaraan',['WNI','WNA']);
            $table->integer('pendidikan_id')->unsigned()->index();
            $table->foreign('pendidikan_id')->references('id')->on('pendidikans')->onUpdate('cascade');
            $table->integer('penghasilan');
            $table->string('pekerjaan');
            $table->enum('status',['yatim','piatu','yatim piatu']);
            $table->string('no_telp');
            $table->string('alamat');
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
        Schema::drop('siswa_walis');
    }
}
