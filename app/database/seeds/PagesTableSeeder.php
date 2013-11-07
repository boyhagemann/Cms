<?php

use Boyhagemann\Pages\Model\Page;
use Boyhagemann\Content\Model\Content;

class PagesTableSeeder extends Seeder {
    
	public function run()
	{
		DB::table('pages')->delete();
		DB::table('navigation_nodes')->delete();

		// Basic pages
		$home   = Page::createWithContent('Home', '/', '', 'layouts.default', 'get', 'home');
		$admin  = Page::createWithContent('Admin', 'admin', 'Boyhagemann\Admin\Controller\NavigationController@dashboard', 'layouts.admin', 'get', 'admin.index');

		// Add the resource pages
		Page::createResourcePages('Resources', 'Boyhagemann\Admin\Controller\ResourceController');
		Page::createResourcePages('Pages', 'Boyhagemann\Pages\Controller\PageController');
		Page::createResourcePages('Dashboard Apps', 'Boyhagemann\Admin\Controller\DashboardController');
		Page::createResourcePages('Blocks', 'Boyhagemann\Content\Controller\BlockController');
		Page::createResourcePages('Content', 'Boyhagemann\Content\Controller\ContentController');
		Page::createResourcePages('Layouts', 'Boyhagemann\Pages\Controller\LayoutController');

		// These routes handle the content configuration form
		Page::createWithContent('Content config form', 'admin/content/config-edit/{content}', 'Boyhagemann\Content\Controller\ConfigController@edit', 'layouts.admin', 'GET', 'admin.content.config.edit');
		Page::createWithContent('Content config update', 'admin/content/config-update/{content}', 'Boyhagemann\Content\Controller\ConfigController@update', 'layouts.admin', 'POST', 'admin.content.config.update');

                // Toolbar for switching content/view mode
		Content::create(array(
			'controller'    => 'Boyhagemann\Content\Controller\ManageController@toolbar',
			'layout_id'     => LayoutsTableSeeder::ID_DEFAULT,
			'section_id'    => SectionsTableSeeder::TOOLS
		));
                
                // Toolbar for switching content/view mode
		Content::create(array(
			'controller'    => 'Boyhagemann\Content\Controller\ManageController@toolbar',
			'layout_id'     => LayoutsTableSeeder::ID_ADMIN,
			'section_id'    => SectionsTableSeeder::TOOLS
		));

                // Left navigation bar
		Content::create(array(
			'controller'    => 'Boyhagemann\Navigation\Controller\MenuController@container',
			'params' 	=> array('container' => 'left'),
			'layout_id'     => LayoutsTableSeeder::ID_ADMIN,
			'section_id'    => SectionsTableSeeder::NAVBAR
		));
                
                // Right navigation bar
		Content::create(array(
			'controller'    => 'Boyhagemann\Navigation\Controller\MenuController@container',
			'params' 	=> array('container' => 'right', 'class' => 'nav navbar-nav pull-right'),
			'layout_id'     => LayoutsTableSeeder::ID_ADMIN,
			'section_id'    => SectionsTableSeeder::NAVBAR
		));

		Content::create(array(
			'block_id'      => BlocksTableSeeder::ID_TEXT,
			'page_id'       => $home->id,
			'section_id'    => SectionsTableSeeder::CONTENT,
			'params'        => array(
				'text' => 'Welcome!!!'
			)
		));

	}

}