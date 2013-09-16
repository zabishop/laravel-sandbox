<?php

use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('projects', function($table)
        {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('type');
            $table->string('tech');
            $table->bigInteger('start');
            $table->bigInteger('end');
            $table->string('description');
            $table->string('picURL');
            $table->timestamps();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('projects');
	}

}