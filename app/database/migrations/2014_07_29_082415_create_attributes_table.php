<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAttributesTable extends Migration {

	public function up()
	{
		Schema::create('attributes', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('entity_id')->unsigned();
			$table->enum('type', array('string', 'float', 'integer', 'boolean'));
			$table->string('name', 100);
			$table->integer('order_number')->nullable()->index();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('attributes');
	}
}