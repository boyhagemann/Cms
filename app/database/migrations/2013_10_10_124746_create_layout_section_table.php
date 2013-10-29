<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLayoutSectionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('layout_section', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('layout_id');
			$table->integer('section_id');

			$table->index('layout_id');
			$table->index('section_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('layout_section');
	}

}
