<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateSRB extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('siswa_rombongan_belajars', function (Blueprint $table) {
            $table->enum('status',['true','false']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('siswa_rombongan_belajars', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
}
