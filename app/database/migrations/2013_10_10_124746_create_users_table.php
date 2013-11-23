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
			$table->timestamps();
			$table->string('email');
			$table->string('password');
			$table->text('permissions');
			$table->tinyInteger('activated');
			$table->string('activation_code');
			$table->string('activated_at');
			$table->string('last_login');
			$table->string('persist_code');
			$table->string('reset_password_code');
			$table->string('first_name')->nullable();
			$table->string('last_name')->nullable();

			$table->unique('email');
			$table->index('persist_code');
			$table->index('reset_password_code');
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
