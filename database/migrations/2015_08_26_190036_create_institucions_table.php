<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateinstitucionsTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('institucions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->varchar(45)('nombre');
			$table->varchar(45)('direccion');
			$table->varchar(45)('telefono');
			$table->varchar(45)('email');
			$table->varchar(45)('descripcion');
			$table->varchar(45)('logo');
			$table->varchar(125)('razon_social');
			$table->varchar(45)('RIF');
			$table->varchar(45)('website');
			$table->varchar(45)('facebook');
			$table->varchar(45)('twitter');
			$table->varchar(45)('instagram');
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
		Schema::drop('institucions');
	}

}
