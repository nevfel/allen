<?php
use Illuminate\Database\Migrations\Migration;

class CreateKategoriTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if ( !Schema::hasTable('kategoriler') )
        {
            Schema::create('kategoriler', function($table)
            {

                $table->engine = 'InnoDB';

                $table->increments('id');
                $table->string('title',255);
                $table->string('slug',255);
                $table->unique('slug');
                $table->text('description');
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
        Schema::drop('kategoriler');
    }

}