<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users',function (Blueprint $table)
		{
			$table->increments('id');
            $table->string('username');
            $table->string('password');
            $table->string('remember_token');
            $table->enum('level',['kecamatan','kelurahan']);
            $table->integer('id_wilayah');
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
		Schema::drop('user');
	}

}
