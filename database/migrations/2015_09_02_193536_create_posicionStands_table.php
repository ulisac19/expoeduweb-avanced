<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Createposicion_standsTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posicionStands', function(Blueprint $table)
		{
			$table->increments('id');
			$table->number('numero');
			$table->number('x');
			$table->number('y');
			$table->number('orientacion');
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
		Schema::drop('posicionStands');
	}

}
