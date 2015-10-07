<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PatchMedsosKondisiUkm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kondisi_usahas', function (Blueprint $table) {
            $table->string('twitter',30);
            $table->string('facebook',50);
            $table->string('line',30);
            $table->string('instagram',30);
            $table->string('website',50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kondisi_usahas', function (Blueprint $table) {
            $table->dropColumn('twitter');
            $table->dropColumn('facebook');
            $table->dropColumn('line');
            $table->dropColumn('instagram');
            $table->dropColumn('website');
        });
    }
}
