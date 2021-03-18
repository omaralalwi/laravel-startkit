<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddGeneratedConversionsToMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		// according to this guide to upgrade From v8 to v9, you must add column
		//https://github.com/spatie/laravel-medialibrary/blob/master/UPGRADING.md
		
        Schema::table('media', function (Blueprint $table) {
              $table->json('generated_conversions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('media', function (Blueprint $table) {
           $table->dropColumn('generated_conversions');
        });
    }
}
