<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateposicionesTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posiciones', function(Blueprint $table)
		{
			$table->increments('id');
			$table->varchar(11)('stand');
			$table->double('posx');
			$table->double('posy');
			$table->double('posz');
			$table->double('rotx');
			$table->double('roty');
			$table->double('rotz');
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
		Schema::drop('posiciones');
	}

}
