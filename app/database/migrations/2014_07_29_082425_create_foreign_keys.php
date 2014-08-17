<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateForeignKeys extends Migration {

	public function up()
	{
		/*Schema::table('products', function(Blueprint $table) {
			$table->foreign('category_id')->references('id')->on('categories')
						->onDelete('cascade')
						->onUpdate('restrict');
		});
		Schema::table('products', function(Blueprint $table) {
			$table->foreign('brand_id')->references('id')->on('brands')
						->onDelete('cascade')
						->onUpdate('restrict');
		});*/
		Schema::table('entities', function(Blueprint $table) {
			$table->foreign('category_id')->references('id')->on('categories')
						->onDelete('cascade')
						->onUpdate('restrict');
		});
		Schema::table('attributes', function(Blueprint $table) {
			$table->foreign('entity_id')->references('id')->on('entities')
						->onDelete('cascade')
						->onUpdate('restrict');
		});
		Schema::table('values', function(Blueprint $table) {
			$table->foreign('product_id')->references('id')->on('products')
						->onDelete('cascade')
						->onUpdate('restrict');
		});
		Schema::table('values', function(Blueprint $table) {
			$table->foreign('attribute_id')->references('id')->on('attributes')
						->onDelete('cascade')
						->onUpdate('restrict');
		});
		Schema::table('values', function(Blueprint $table) {
			$table->foreign('stack_id')->references('id')->on('stacks')
						->onDelete('cascade')
						->onUpdate('restrict');
		});
		Schema::table('values', function(Blueprint $table) {
			$table->foreign('unit_id')->references('id')->on('units')
						->onDelete('cascade')
						->onUpdate('restrict');
		});
		Schema::table('stacks', function(Blueprint $table) {
			$table->foreign('attribute_id')->references('id')->on('attributes')
						->onDelete('cascade')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		/*Schema::table('products', function(Blueprint $table) {
			$table->dropForeign('products_category_id_foreign');
		});
		Schema::table('products', function(Blueprint $table) {
			$table->dropForeign('products_brand_id_foreign');
		});*/
		Schema::table('entities', function(Blueprint $table) {
			$table->dropForeign('entities_category_id_foreign');
		});
		Schema::table('attributes', function(Blueprint $table) {
			$table->dropForeign('attributes_entity_id_foreign');
		});
		Schema::table('values', function(Blueprint $table) {
			$table->dropForeign('values_product_id_foreign');
		});
		Schema::table('values', function(Blueprint $table) {
			$table->dropForeign('values_attribute_id_foreign');
		});
		Schema::table('values', function(Blueprint $table) {
			$table->dropForeign('values_stack_id_foreign');
		});
		Schema::table('values', function(Blueprint $table) {
			$table->dropForeign('values_unit_id_foreign');
		});
		Schema::table('stacks', function(Blueprint $table) {
			$table->dropForeign('stacks_attribute_id_foreign');
		});
	}
}