<?php

use Boyhagemann\Navigation\Model\Node;
use Boyhagemann\Pages\Model\Page;

class NavigationNodesTableSeeder extends Seeder {
    
	public function run()
	{
//		DB::table('navigation_nodes')->delete();

		Node::create(array(
			'title' => 'Dashboard Apps',
            'description' => 'Create shortcuts to pages that you use often.',
			'page_id' => Page::whereAlias('admin.dashboard-app.index')->first()->id,
			'icon_class' => 'icon-th',
			'container_id' => NavigationContainersTableSeeder::DASHBOARD,
		));

		Node::create(array(
			'title' => 'Pages',
            'description' => 'Manage all of your pages you created.',
			'page_id' => Page::whereAlias('admin.page.index')->first()->id,
			'icon_class' => 'icon-list-ul',
			'container_id' => NavigationContainersTableSeeder::DASHBOARD,
		));

		Node::create(array(
			'title' => 'Create page',
            'description' => 'You can easily start a new page from here. Just enter the basis things and you are ready to go.',
			'page_id' => Page::whereAlias('admin.page.create')->first()->id,
			'icon_class' => 'icon-file',
			'container_id' => NavigationContainersTableSeeder::DASHBOARD,
		));

		Node::create(array(
			'title' => 'Create resource',
            'description' => 'If you want dynamic content on your website, this is a good way to start',
			'page_id' => Page::whereAlias('admin.resource.create')->first()->id,
			'icon_class' => 'icon-briefcase',
			'container_id' => NavigationContainersTableSeeder::DASHBOARD,
		));
	}

}