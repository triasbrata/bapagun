<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePegawaiTugasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai_tugas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pegawai_id')->unsigned()->index();
            $table->foreign('pegawai_id')->references('id')->on('pegawais')->onUpdate('cascade')->onDelete('cascade');
            $table->enum('role',["Staff TU","Guru","Wali Kelas","Kepala Sekolah","Administratif"]);
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
        Schema::table('pegawai_tugas',function ($table)
        {
            $table->dropForeign('pegawai_tugas_pegawai_id_foreign');
        });
        Schema::drop('pegawai_tugas');
    }
}
