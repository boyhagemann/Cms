<?php

use Boyhagemann\Pages\Model\Section;

class SectionsTableSeeder extends Seeder {

	public function run()
	{
		DB::table('sections')->delete();

		Section::create(array(
			'id' => 1,
			'title' => 'Content',
			'name' => 'content',
			'layout_id' => 1,
		));

		Section::create(array(
			'id' => 2,
			'title' => 'Content',
			'name' => 'content',
			'layout_id' => 2,
		));

		Section::create(array(
			'id' => 3,
			'title' => 'Sidebar',
			'name' => 'sidebar',
			'layout_id' => 1,
		));

		Section::create(array(
			'id' => 4,
			'title' => 'Tools',
			'name' => 'tools',
			'layout_id' => 1,
		));
	}

}