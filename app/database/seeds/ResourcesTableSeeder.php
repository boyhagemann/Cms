<?php

use Boyhagemann\Admin\Model\Resource;

class ResourcesTableSeeder extends Seeder {

	public function run()
	{
		DB::table('resources')->delete();

		Resource::create(array(
			'title' => 'App',
			'controller' => 'Boyhagemann\Admin\Controller\AppController',
		));

		Resource::create(array(
			'title' => 'Resource',
			'controller' => 'Boyhagemann\Admin\Controller\ResourceController',
		));
	}

}