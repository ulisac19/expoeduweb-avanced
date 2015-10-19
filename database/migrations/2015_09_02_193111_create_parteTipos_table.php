<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Createparte_tiposTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('parteTipos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->varchar(45)('nombre');
			$table->boolean('clickeable');
			$table->number('tipo');
			$table->number('tipo_stand_id');
			$table->number('parte_stand_id');
			$table->number('dimension_parte_id');
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
		Schema::drop('parteTipos');
	}

}
