<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBrandsTable extends Migration {

	public function up()
	{
		Schema::create('brands', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 50);
			$table->string('slug', 50)->unique();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('brands');
	}
}