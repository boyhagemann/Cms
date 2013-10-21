<?php

use Boyhagemann\Pages\Model\Page;
use Boyhagemann\Content\Model\Content;

class PagesTableSeeder extends Seeder {

	public function run()
	{
		DB::table('pages')->delete();

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