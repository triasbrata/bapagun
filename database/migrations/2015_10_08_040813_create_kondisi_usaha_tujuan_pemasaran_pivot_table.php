<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKondisiUsahaTujuanPemasaranPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kondisi_tujuan_pem', function (Blueprint $table) {
            $table->integer('kondisi_usaha_id')->unsigned()->index();
            $table->foreign('kondisi_usaha_id')->references('id')->on('kondisi_usahas')->onDelete('cascade');
            $table->integer('tujuan_pemasaran_id')->unsigned()->index();
            $table->foreign('tujuan_pemasaran_id')->references('id')->on('tujuan_pemasarans')->onDelete('cascade');
            $table->primary(['kondisi_usaha_id', 'tujuan_pemasaran_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('kondisi_tujuan_pem');
    }
}
