<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateavatarsTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('avatars', function(Blueprint $table)
		{
			$table->increments('id');
			$table->varchar(45)('nombre');
			$table->varchar(126)('descripcion');
			$table->number('users_id');
			$table->number('avatar_alto_id');
			$table->number('avatar_bajo_id');
			$table->number('avatar_medio_id');
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
		Schema::drop('avatars');
	}

}
