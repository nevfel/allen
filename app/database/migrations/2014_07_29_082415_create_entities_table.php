<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEntitiesTable extends Migration {

	public function up()
	{
		Schema::create('entities', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('category_id')->unsigned();
			$table->string('name', 100);
			$table->integer('order_number')->nullable()->index();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('entities');
	}
}