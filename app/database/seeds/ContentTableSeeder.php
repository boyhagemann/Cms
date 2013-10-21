<?php

use Boyhagemann\Pages\Model\Section;

use Boyhagemann\Content\Model\Content;

class ContentTableSeeder extends Seeder {

	public function run()
	{
		DB::table('content')->delete();
	}

}