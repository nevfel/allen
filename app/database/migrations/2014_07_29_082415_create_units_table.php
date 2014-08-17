<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUnitsTable extends Migration {

	public function up()
	{
		Schema::create('units', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 10)->unique();
			$table->string('long_name', 100)->nullable();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('units');
	}
}