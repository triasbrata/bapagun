<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDesasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desas', function (Blueprint $table) {
            $table->string('id',10);
            $table->string('kecamatan_id',10);
            $table->foreign('kecamatan_id')->reference('id')->on('kecamatans')->onUpdate('cascade')->onDelete('cascade');
            $table->string('label');
            $table->primary('id');
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
        Schema::drop('desas');
    }
}
