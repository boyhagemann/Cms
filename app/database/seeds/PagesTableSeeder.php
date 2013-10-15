<?php

use Boyhagemann\Pages\Model\Page;

class PagesTableSeeder extends Seeder {

	public function run()
	{
		DB::table('pages')->delete();

		Page::create(array(
			'title' => 'Admin',
			'route' => 'admin.index',
			'method' => 'get',
			'layout_id' => 1,
		));

		Page::createResourcePages('Apps', 'Boyhagemann\Admin\Controller\AppController', 'admin/apps');
		Page::createResourcePages('Resources', 'Boyhagemann\Admin\Controller\ResourceController', 'admin/resources');
	}

}