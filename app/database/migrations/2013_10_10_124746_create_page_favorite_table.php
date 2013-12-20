<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePageFavoriteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('page_favorite', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->integer('user_id');
			$table->integer('page_id');
			$table->text('params');
			$table->integer('order');

			$table->index('user_id');
			$table->index('page_id');
			$table->index('order');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('page_favorite');
	}

}
