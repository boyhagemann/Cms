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
		Page::createResourcePages('Content', 'Boyhagemann\Content\Controller\ContentController', 'admin/content', 'layouts.admin');

		$page = Page::createWithContent('Home', '/', 'Boyhagemann\Admin\Controller\IndexController@dashboard', 'layouts.default');
		$page = Page::createWithContent('Admin', 'admin', 'Boyhagemann\Admin\Controller\IndexController@dashboard', 'layouts.admin');

		Content::create(array(
			'controller' => 'Boyhagemann\Content\Controller\ManageController@toolbar',
			'global' => 1,
			'page_id' => $page->id,
			'section_id' => 4, // Tools
		));

	}

}