<?php

use Boyhagemann\Pages\Model\Layout;

class LayoutsTableSeeder extends Seeder {

	public function run()
	{
		DB::table('layouts')->delete();

		Layout::create(array(
			'title' => 'Admin',
			'name' => 'admin::layouts.admin',
		));

		Layout::create(array(
			'title' => 'Default',
			'name' => 'layouts.default',
		));
	}

}