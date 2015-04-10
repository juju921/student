<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('students', function(Blueprint $table)
		{
            $table->increments('id');
            $table->string('firstname', 100);
            $table->string('name', 100);
            $table->text('bio');
            $table->enum('type', ['dev', 'graphisme', 'editor'])->nullable();
            $table->integer('note')->nullable();
            $table->enum('status', ['publish', 'unpublish', 'trash'])->default('unpublish');
            $table->string('uri',200)->nullable();
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
		Schema::drop('students');
	}

}
