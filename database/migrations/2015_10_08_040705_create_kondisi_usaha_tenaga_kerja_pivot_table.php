<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKondisiUsahaTenagaKerjaPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kutk', function (Blueprint $table) {
            $table->integer('kondisi_usaha_id')->unsigned()->index();
            $table->foreign('kondisi_usaha_id')->references('id')->on('kondisi_usahas')->onDelete('cascade');
            $table->integer('tenaga_kerja_id')->unsigned()->index();
            $table->foreign('tenaga_kerja_id')->references('id')->on('tenaga_kerjas')->onDelete('cascade');
            $table->primary(['kondisi_usaha_id', 'tenaga_kerja_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('kutk');
    }
}
