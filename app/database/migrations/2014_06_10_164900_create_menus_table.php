<?php
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if ( !Schema::hasTable('menus') )
        {
            Schema::create('menus', function($table)
            {

                $table->engine = 'InnoDB';

                $table->increments('id');
                $table->integer('parent_id');
                $table->string('title',255);
                $table->string('slug',255);
                $table->unique('slug');
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
        Schema::drop('menus');
    }

}