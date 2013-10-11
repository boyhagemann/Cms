<?php

class AdminAppTableSeeder extends Seeder {

	public function run()
	{
		DB::table('admin_apps')->delete();

		Admin\App::create(array(
			'title' => 'Apps',
			'route' => 'admin.apps.index',
			'icon_class' => 'icon'
		));

		Admin\App::create(array(
			'title' => 'Create a new resource',
			'route' => 'admin.crud.create',
		));
	}

}