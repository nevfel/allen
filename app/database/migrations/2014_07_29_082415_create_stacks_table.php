<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStacksTable extends Migration {

	public function up()
	{
		Schema::create('stacks', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('attribute_id')->unsigned();
			$table->string('name');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('stacks');
	}
}