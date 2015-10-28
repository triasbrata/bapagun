<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBantuansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bantuans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('instansi_id')->unsigned()->index();
            $table->foreign('instansi_id')->references('id')->on('instansis')->onDelete('cascade')->onUpdate('cascade');
            $table->string('title');
            $table->text('keterangan');
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
        Schema::drop('bantuans');
    }
}
