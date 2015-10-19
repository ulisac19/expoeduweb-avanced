<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Createdatos_standsTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('datosStands', function(Blueprint $table)
		{
			$table->increments('id');
			$table->varchar(45)('logoyaccesomapa');
			$table->varchar(45)('stand24mts');
			$table->varchar(45)('stand48mts');
			$table->varchar(45)('usuariochat1');
			$table->varchar(45)('usuariochat2');
			$table->varchar(45)('pendon1');
			$table->varchar(45)('pendon2');
			$table->varchar(45)('pendon3');
			$table->varchar(45)('pendon3');
			$table->varchar(45)('pendon4');
			$table->varchar(45)('pendon5');
			$table->varchar(45))('video1');
			$table->varchar(45)('video2');
			$table->varchar(45)('video3');
			$table->varchar(45)('informacion');
			$table->varchar(45)('fondomural');
			$table->varchar(45)('galeriafotos');
			$table->varchar(45)('facebook');
			$table->varchar(45)('twitter');
			$table->varchar(45)('instagram');
			$table->number('stan_id');
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
		Schema::drop('datosStands');
	}

}
