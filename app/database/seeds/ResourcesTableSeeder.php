<?php

use Boyhagemann\Admin\Model\ResourceRepository;

class ResourcesTableSeeder extends Seeder {

	public function run()
	{
		DB::table('resources')->delete();

		ResourceRepository::createWithPages(array(
			'title' => 'Resource',
            'description' => 'Here you can have all your resources that will contain data you can use in your application',
			'controller' => 'Boyhagemann\Admin\Controller\ResourceController',
		));

		ResourceRepository::createWithPages(array(
			'title' => 'Page',
            'description' => 'This is a list of all pages that are used in your application. You can add as many pages as you like.',
			'controller' => 'Boyhagemann\Pages\Controller\PageController',
		));

		ResourceRepository::createWithPages(array(
			'title' => 'Layout',
            'description' => 'Pages can have several layouts to choose from, depending on how the data is grouped and presented to the user',
			'controller' => 'Boyhagemann\Pages\Controller\LayoutController',
		));

		ResourceRepository::createWithPages(array(
			'title' => 'Block',
            'description' => 'These are containers of data that are put in layout sections on a page.',
			'controller' => 'Boyhagemann\Content\Controller\BlockController',
		));

		ResourceRepository::createWithPages(array(
			'title' => 'Content',
            'description' => 'A combination of a block on a certain page in one section.',
			'controller' => 'Boyhagemann\Content\Controller\ContentController',
		));

		ResourceRepository::createWithPages(array(
			'title' => 'Users',
            'description' => 'Manage users on the website',
			'controller' => 'Boyhagemann\User\Controller\UserController',
		));

		ResourceRepository::createWithPages(array(
			'title' => 'User groups',
            'description' => 'Manage user groups on the website',
			'controller' => 'Boyhagemann\User\Controller\GroupController',
		));

		ResourceRepository::createWithPages(array(
			'title' => 'Files',
            'description' => 'Manage file uploads',
			'controller' => 'Boyhagemann\Uploads\Controller\FileController',
		));

	}

}