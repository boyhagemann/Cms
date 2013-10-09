<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminAppsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		$controller = App::make('Admin\AppController');
		$controller->init('index');
		$controller->getModelBuilder()->autoGenerate()->build();
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('admin_app', function(Blueprint $table)
		{
			//
		});
	}

}