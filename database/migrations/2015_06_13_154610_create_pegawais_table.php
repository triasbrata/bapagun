<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePegawaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawais', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('nama',25);
            $table->enum('gender',['L','P']);
            $table->string('nip',18);
            $table->string('tempat_lahir',20);
            $table->date('tanggal_lahir');
            $table->enum('status_kepegawaian',['Pegawai Negeri','Honorer']);
            $table->string('jenis_ptk');
            $table->string('pengawas_bidang_studi',35);
            $table->enum('agama',['islam','kristen protestant','kristen katolik','buddha','hindu']);
            $table->string('nama_ibu_kandung',10);
            $table->enum('status_perkawinan',['kawin','belum kawin']);
            $table->string('npwp','25');
            $table->enum('kewarganegaraan',['WNI','WNA']);

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
        Schema::drop('pegawais');
    }
}
