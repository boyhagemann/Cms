<?php

use Boyhagemann\Pages\Model\Page;
use Boyhagemann\Content\Model\Content;

class PagesTableSeeder extends Seeder {

	public function run()
	{
		DB::table('pages')->delete();

                Page::createResourcePages('Resource', 'Boyhagemann\Admin\Controller\ResourceController', 'admin/resources', 'layouts.admin');
                Page::createResourcePages('App', 'Boyhagemann\Admin\Controller\AppController', 'admin/apps', 'layouts.admin');
                Page::createResourcePages('Page', 'Boyhagemann\Pages\Controller\PageController', 'admin/pages', 'layouts.admin');
                Page::createResourcePages('Block', 'Boyhagemann\Content\Controller\BlockController', 'admin/blocks', 'layouts.admin');
                
		$page = Page::createWithContent('Admin', 'admin', 'Boyhagemann\Admin\Controller\IndexController@dashboard', 'layouts.admin');

		Content::create(array(
			'controller' => 'Boyhagemann\Content\Controller\ManageController@toolbar',
			'global' => 1,
			'page_id' => $page->id,
			'section_id' => 1,
		));

//		Page::create(array(
//			'title' => 'Admin',
//			'route' => 'admin',
//			'controller' => 'Boyhagemann\Admin\Controller\IndexController@dashboard',
//			'method' => 'get',
//			'alias' => 'admin',
//			'layout_id' => 1,
//		));
	}

}