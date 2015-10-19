<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatestandsTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('stands', function(Blueprint $table)
		{
			$table->increments('id');
			$table->number('tipo_stand');
			$table->varchar(45)('nombre');
			$table->number('puesto');
			$table->varchar(256)('imagen_base');
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
		Schema::drop('stands');
	}

}
