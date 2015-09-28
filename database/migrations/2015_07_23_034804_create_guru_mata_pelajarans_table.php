<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuruMataPelajaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guru_mata_pelajarans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('guru_id')->unsigned()->index();
            $table->foreign('guru_id')->references('id')->on('gurus')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('mata_pelajaran_id')->unsigned()->index();
            $table->foreign('mata_pelajaran_id')->references('id')->on('mata_pelajarans')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::drop('guru_mata_pelajarans');
    }
}
