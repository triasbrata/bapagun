<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKondisiUsahasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kondisi_usahas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('unit_usaha_id')->unsigned();
            $table->foreign('unit_usaha_id')->references('id')->on('unit_usahas')->onDelete('restrict')->onUpdate('cascade');
            $table->string('tahun',4);
            $table->string('bulan',2);
            $table->integer('aset');
            $table->integer('omset');
            $table->enum('bentuk_pemodalan',['mandiri','keluarga','koperasi','hibah','bank','lainnya']);
            $table->string('management_usaha');
            $table->text('permasalahan');
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
        Schema::drop('kondisi_usahas');
    }
}
