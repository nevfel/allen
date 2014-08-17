<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateValuesTable extends Migration {

	public function up()
	{
		Schema::create('values', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('product_id')->unsigned();
			$table->integer('attribute_id')->unsigned();
			$table->integer('stack_id')->unsigned()->nullable();
			$table->string('value');
			$table->integer('unit_id')->unsigned()->nullable();
			$table->integer('order_number')->nullable()->index();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('values');
	}
}