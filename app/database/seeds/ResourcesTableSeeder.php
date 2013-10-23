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
                
		Resource::create(array(
			'title' => 'Page',
			'controller' => 'Boyhagemann\Pages\Controller\PageController',
		));

		Resource::create(array(
			'title' => 'Block',
			'controller' => 'Boyhagemann\Content\Controller\BlockController',
		));

		Resource::create(array(
			'title' => 'Content',
			'controller' => 'Boyhagemann\Content\Controller\ContentController',
		));
	}

}