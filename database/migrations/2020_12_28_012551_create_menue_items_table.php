<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenueItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menue_items', function (Blueprint $table) {
            $table->id();
			$table->json('title');
			$table->json('slug');
			$table->integer('menu_id');
			$table->string('url')->nullable();
			$table->string('icon_class')->nullable();
			$table->string('parent_id')->nullable();
			$table->integer('order')->nullable();
			$table->string('route')->nullable();
            $table->timestamps();
			$table->softDeletes();
			
			$table->foreign('menu_id')
            ->references('id')->on('menues');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menue_items');
    }
}
