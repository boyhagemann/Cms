<?php

use Boyhagemann\Admin\Model\App as AdminApp;

class AdminAppsTableSeeder extends Seeder {

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
			'route' => 'admin.resources.create',
			'icon_class' => 'icon-upload-2'
		));

		AdminApp::create(array(
			'title' => 'Pages',
			'route' => 'admin.pages.index',
			'icon_class' => 'icon-page'
		));

		AdminApp::create(array(
			'title' => 'Blocks',
			'route' => 'admin.blocks.index',
			'icon_class' => 'icon-page'
		));
	}

}