<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKondisiUsahaPermodalanPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kondisi_usaha_permodalan', function (Blueprint $table) {
            $table->integer('kondisi_usaha_id')->unsigned()->index();
            $table->foreign('kondisi_usaha_id')->references('id')->on('kondisi_usahas')->onDelete('cascade');
            $table->integer('permodalan_id')->unsigned()->index();
            $table->foreign('permodalan_id')->references('id')->on('permodalans')->onDelete('cascade');
            $table->primary(['kondisi_usaha_id', 'permodalan_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('kondisi_usaha_permodalan');
    }
}
