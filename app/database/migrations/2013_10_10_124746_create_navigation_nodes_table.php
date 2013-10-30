<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNavigationNodesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('navigation_nodes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->integer('page_id');
			$table->integer('container_id');
			$table->text('params');

			$table->index('page_id');
			$table->index('container_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('navigation_nodes');
	}

}
