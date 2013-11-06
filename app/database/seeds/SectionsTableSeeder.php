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
			'mode' => Section::MODE_PUBLIC,
		));

		Section::create(array(
			'id' => self::SIDEBAR,
			'title' => 'Sidebar',
			'name' => 'sidebar',
			'mode' => Section::MODE_PUBLIC,
		));

		Section::create(array(
			'id' => self::TOOLS,
			'title' => 'Tools',
			'name' => 'tools',
			'mode' => Section::MODE_PROTECTED,
		));

		Section::create(array(
			'id' => self::NAVBAR,
			'title' => 'Navigation bar',
			'name' => 'navbar',
			'mode' => Section::MODE_PROTECTED,
		));
	}

}