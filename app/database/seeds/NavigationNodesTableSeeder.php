<?php

use Boyhagemann\Navigation\Model\Node;
use Boyhagemann\Pages\Model\Page;

class NavigationNodesTableSeeder extends Seeder {
    
	public function run()
	{
//		DB::table('navigation_nodes')->delete();

		Node::create(array(
			'title' => 'Dashboard Apps',
			'page_id' => Page::whereAlias('admin.dashboard.index')->first()->id,
			'icon_class' => 'icon-th-list',
			'container_id' => NavigationContainersTableSeeder::DASHBOARD,
		));

		Node::create(array(
			'title' => 'Pages',
			'page_id' => Page::whereAlias('admin.pages.index')->first()->id,
			'icon_class' => 'icon-list-ul',
			'container_id' => NavigationContainersTableSeeder::DASHBOARD,
		));

		Node::create(array(
			'title' => 'Create page',
			'page_id' => Page::whereAlias('admin.pages.create')->first()->id,
			'icon_class' => 'icon-file',
			'container_id' => NavigationContainersTableSeeder::DASHBOARD,
		));

		Node::create(array(
			'title' => 'Edit layout admin',
			'page_id' => Page::whereAlias('admin.layouts.edit')->first()->id,
			'icon_class' => 'icon-file',
			'params' => array(
				'id' => 1
			),
			'container_id' => NavigationContainersTableSeeder::DASHBOARD,
		));
	}

}