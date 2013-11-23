<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThrottleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('throttle', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->string('ip_address')->nullable();
			$table->integer('attempts');
			$table->tinyInteger('suspended');
			$table->tinyInteger('banned');
			$table->timestamp('last_attempt_at');
			$table->timestamp('suspended_at');
			$table->timestamp('banned_at');

			$table->index('user_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('throttle');
	}

}
