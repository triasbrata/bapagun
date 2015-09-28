<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateRB extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rombongan_belajars', function (Blueprint $table) {
            $table->enum('semester',['ganjil','genap']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rombongan_belajars', function (Blueprint $table) {
            $table->dropColumn('semester');
        });
    }
}
