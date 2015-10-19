<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Createdimension_partesTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dimensionPartes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->number('x');
			$table->number('y');
			$table->number('ancho');
			$table->number('alto');
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
		Schema::drop('dimensionPartes');
	}

}
