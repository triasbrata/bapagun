<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNilaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilais', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kegiatan_belajar_id')->unsigned()->index();
            $table->foreign('kegiatan_belajar_id')->references('id')->on('kegiatan_belajars')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('siswa_id')->unsigned()->index();
            $table->foreign('siswa_id')->references('id')->on('siswas')->onUpdate('cascade')->onDelete('cascade');
            $table->double('nilai',2,2);
            $table->enum('jenis_nilai',['1','2','3']);
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
        Schema::drop('nilais');
    }
}
