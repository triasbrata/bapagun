<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKondisiUsahaTempatPemasaranPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kondisi_tempat_pem', function (Blueprint $table) {
            $table->integer('kondisi_usaha_id')->unsigned()->index();
            $table->foreign('kondisi_usaha_id')->references('id')->on('kondisi_usahas')->onDelete('cascade');
            $table->integer('tempat_pemasaran_id')->unsigned()->index();
            $table->foreign('tempat_pemasaran_id')->references('id')->on('tempat_pemasarans')->onDelete('cascade');
            $table->primary(['kondisi_usaha_id', 'tempat_pemasaran_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('kondisi_tempat_pem');
    }
}
