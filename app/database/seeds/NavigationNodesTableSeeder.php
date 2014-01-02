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
			'container_id' => NavigationContainersTableSeeder::DASHBOARD,
		));

		Node::create(array(
			'title' => 'Pages',
            'description' => 'Manage all of your pages you created.',
			'page_id' => Page::whereAlias('admin.page.index')->first()->id,
			'container_id' => NavigationContainersTableSeeder::DASHBOARD,
		));

		Node::create(array(
			'title' => 'Users',
            'description' => 'Manage the users on your website.',
			'page_id' => Page::whereAlias('admin.users.index')->first()->id,
			'container_id' => NavigationContainersTableSeeder::DASHBOARD,
		));

		Node::create(array(
			'title' => 'User groups',
            'description' => 'Manage the user groups on your website.',
			'page_id' => Page::whereAlias('admin.user-groups.index')->first()->id,
			'container_id' => NavigationContainersTableSeeder::DASHBOARD,
		));

		Node::create(array(
			'title' => 'Create resource',
            'description' => 'If you want dynamic content on your website, this is a good way to start',
			'page_id' => Page::whereAlias('admin.resource.create')->first()->id,
			'container_id' => NavigationContainersTableSeeder::DASHBOARD,
		));
        
		Node::create(array(
			'title' => 'Permissions',
            'description' => 'Control who can access, create or update resources or other permissions.',
			'page_id' => Page::whereAlias('user.permissions')->first()->id,
			'container_id' => NavigationContainersTableSeeder::DASHBOARD,
		));
	}

}