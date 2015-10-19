<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateferiasTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ferias', function(Blueprint $table)
		{
			$table->increments('id');
			$table->varchar(128)('nombre');
			$table->varchar(256)('descripcion');
			$table->varchar(256)('archivos');
			$table->varchar(256)('plano');
			$table->varchar(256)('url');
			$table->int('responsable');
			$table->datetime('fecha_incio');
			$table->date('fecha_final');
			$table->date('fecha_desmontaje');
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
		Schema::drop('ferias');
	}

}
