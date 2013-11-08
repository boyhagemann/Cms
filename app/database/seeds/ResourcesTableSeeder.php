<?php

use Boyhagemann\Admin\Model\ResourceRepository;

class ResourcesTableSeeder extends Seeder {

	public function run()
	{
		DB::table('resources')->delete();

		ResourceRepository::createWithPages(array(
			'title' => 'Resource',
			'controller' => 'Boyhagemann\Admin\Controller\ResourceController',
		));

		ResourceRepository::createWithPages(array(
			'title' => 'Page',
			'controller' => 'Boyhagemann\Pages\Controller\PageController',
		));

		ResourceRepository::createWithPages(array(
			'title' => 'Layout',
			'controller' => 'Boyhagemann\Pages\Controller\LayoutController',
		));

		ResourceRepository::createWithPages(array(
			'title' => 'Block',
			'controller' => 'Boyhagemann\Content\Controller\BlockController',
		));

		ResourceRepository::createWithPages(array(
			'title' => 'Content',
			'controller' => 'Boyhagemann\Content\Controller\ContentController',
		));

	}

}