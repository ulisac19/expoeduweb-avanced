<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Createavatar_altosTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('avatarAltos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->varchar(45)('nombre');
			$table->varchar(125)('descripcion');
			$table->number('color_id');
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
		Schema::drop('avatarAltos');
	}

}
