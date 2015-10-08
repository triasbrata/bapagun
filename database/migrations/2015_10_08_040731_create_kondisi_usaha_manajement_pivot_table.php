<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKondisiUsahaManajementPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kondisi_usaha_manajement', function (Blueprint $table) {
            $table->integer('kondisi_usaha_id')->unsigned()->index();
            $table->foreign('kondisi_usaha_id')->references('id')->on('kondisi_usahas')->onDelete('cascade');
            $table->integer('manajement_id')->unsigned()->index();
            $table->foreign('manajement_id')->references('id')->on('manajements')->onDelete('cascade');
            $table->primary(['kondisi_usaha_id', 'manajement_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('kondisi_usaha_manajement');
    }
}
