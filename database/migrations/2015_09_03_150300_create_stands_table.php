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
			$table->varchar(256)('imagen');
			$table->number('tipo_stand_id');
			$table->number('posicion_stand_id');
			$table->vachar(45)('nombre');
			$table->number('user_id');
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
