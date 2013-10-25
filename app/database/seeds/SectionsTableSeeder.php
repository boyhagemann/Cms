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
		));

		Section::create(array(
			'id' => 3,
			'title' => 'Sidebar',
			'name' => 'sidebar',
		));

		Section::create(array(
			'id' => 4,
			'title' => 'Tools',
			'name' => 'tools',
		));
	}

}