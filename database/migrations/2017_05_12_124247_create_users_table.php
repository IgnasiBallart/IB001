<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('surname');
			$table->date('born');
			$table->string('dni');
			$table->string('telef');
			$table->string('address');
			$table->string('mail');
			$table->integer('deleted');
			$table->integer('team_id')->unsigned();

			$table->timestamps();
		});

		Schema::table('users', function($table) {
				$table->foreign('team_id')->references('id')->on('teams');
		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
