<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('nama',25);
            $table->enum('gender',['L','P']);
            $table->string('nis',10);
            $table->string('nisn',10);
            $table->string('tempat_lahir',20);
            $table->date('tanggal_lahir');
            $table->string('nik',20);
            $table->enum('agama',['islam','kristen protestant','kristen katolik','buddha','hindu']);
            $table->enum('kewarganegaraan',['WNI','WNA']);
            $table->integer('urutan_saudara');
            $table->integer('jumlah_saudara_kandung');
            $table->integer('jumlah_saudara_tiri');
            $table->integer('jumlah_saudara_angkat');
            $table->enum('status',['yatim','piatu','yatim piatu']);
            $table->string('bahasa_dirumah');
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
        Schema::drop('siswas');
    }
}
