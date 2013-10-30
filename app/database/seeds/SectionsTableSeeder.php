<?php

use Boyhagemann\Pages\Model\Section;

class SectionsTableSeeder extends Seeder {

    const CONTENT   = 1;
    const SIDEBAR   = 2;
    const TOOLS     = 3;
    const NAVBAR    = 4;

	public function run()
	{
		DB::table('sections')->delete();

		Section::create(array(
			'id' => self::CONTENT,
			'title' => 'Content',
			'name' => 'content',
		));

		Section::create(array(
			'id' => self::SIDEBAR,
			'title' => 'Sidebar',
			'name' => 'sidebar',
		));

		Section::create(array(
			'id' => self::TOOLS,
			'title' => 'Tools',
			'name' => 'tools',
		));

		Section::create(array(
			'id' => self::NAVBAR,
			'title' => 'Navigation bar',
			'name' => 'navbar',
		));
	}

}