<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Createposicion_avatarsTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posicionAvatars', function(Blueprint $table)
		{
			$table->increments('id');
			$table->double('x');
			$table->double('y');
			$table->double('z');
			$table->double('rot');
			$table->int('action');
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
		Schema::drop('posicionAvatars');
	}

}
