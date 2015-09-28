<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHobisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hobis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('label',25);
            $table->enum('jenis_hobi',['kesenian','olahraga','organisasi','lain-lain']);
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
        Schema::drop('hobis');
    }
}
