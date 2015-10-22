<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatepublicidadsTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('publicidads', function(Blueprint $table)
		{
			$table->increments('id');
			$table->varchar(90)('nombre');
			$table->varchar(256)('obj');
			$table->varchar(256)('imagen');
			$table->varchar(256)('oclusion');
			$table->varchar(256)('url');
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
		Schema::drop('publicidads');
	}

}
