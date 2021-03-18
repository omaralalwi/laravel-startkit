<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
			$table->json('title'); 
			// Every translatable attributes need to be have a JSON type column according to spatie/aravel-translatable
			$table->json('slug');
			$table->json('description');
			$table->timestamps();
			
			/*$table->foreign('category_id')
            ->references('id')->on('caregories'); */
			
			$table->engine = 'InnoDB';

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
