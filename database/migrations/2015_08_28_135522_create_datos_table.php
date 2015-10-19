<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatedatosTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('datos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->number('users_id');
			$table->varchar(125)('facebook');
			$table->varchar(125)('google');
			$table->varchar(45)('instagram');
			$table->varchar(45)('nombres');
			$table->varchar(45)('apellidos');
			$table->date('fecha_nacimiento');
			$table->number('genero');
			$table->varchar(45)('telefono');
			$table->number('ciudad_id');
			$table->number('tipo_login');
			$table->varchar(256)('avatar');
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
		Schema::drop('datos');
	}

}
