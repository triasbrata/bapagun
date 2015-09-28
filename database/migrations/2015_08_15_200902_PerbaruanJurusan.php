<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PerbaruanJurusan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     if (Schema::hasTable('programs'))
     {
        Schema::rename('programs', 'jurusans');
     }
     if (Schema::hasTable('jurusans'))
     {
         Schema::table('jurusans', function($table)
         {
            $table->string('label',35)->change();
         });
     }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('jurusans'))
        {
            Schema::rename('jurusans', 'programs');
        }
        if (Schema::hasTable('programs'))
        {
            Schema::table('programs', function($table)
            {
                $table->string('label',15)->change();
            });
        }
    }
}
