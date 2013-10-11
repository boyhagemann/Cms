<?php

use Boyhagemann\Admin\Model\App as AdminApp;

class AdminAppTableSeeder extends Seeder {

	public function run()
	{
		DB::table('admin_apps')->delete();

		AdminApp::create(array(
			'title' => 'Apps',
			'route' => 'admin.apps.index',
			'icon_class' => 'icon-th-large'
		));

		AdminApp::create(array(
			'title' => 'Create a new resource',
			'route' => 'admin.crud.create',
			'icon_class' => 'icon-upload-2'
		));
	}

}