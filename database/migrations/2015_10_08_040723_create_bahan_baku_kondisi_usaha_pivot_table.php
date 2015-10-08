<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBahanBakuKondisiUsahaPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bahan_baku_kondisi_usaha', function (Blueprint $table) {
            $table->integer('bahan_baku_id')->unsigned()->index();
            $table->foreign('bahan_baku_id')->references('id')->on('bahan_bakus')->onDelete('cascade');
            $table->integer('kondisi_usaha_id')->unsigned()->index();
            $table->foreign('kondisi_usaha_id')->references('id')->on('kondisi_usahas')->onDelete('cascade');
            $table->primary(['bahan_baku_id', 'kondisi_usaha_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('bahan_baku_kondisi_usaha');
    }
}
