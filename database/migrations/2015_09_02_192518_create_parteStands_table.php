<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Createparte_standsTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('parteStands', function(Blueprint $table)
		{
			$table->increments('id');
			$table->varchar(256)('enlace');
			$table->varchar(256)('imagen');
			$table->number('color');
			$table->number('stand_id');
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
		Schema::drop('parteStands');
	}

}
