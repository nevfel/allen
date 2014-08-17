<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if ( !Schema::hasTable('products') )
        {
            Schema::create('products', function($table)
            {

                $table->engine = 'InnoDB';

                $table->increments('id');
				$table->string('name', 255);
                $table->integer('parent_id');
				$table->integer('category_id')->unsigned();
				$table->integer('brand_id')->unsigned();
                $table->string('title',255);
				$table->string('slug', 255)->unique();
                $table->text('description');
                $table->integer('sort');
                $table->index('id');
                $table->timestamps();

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
		//
	}

}
