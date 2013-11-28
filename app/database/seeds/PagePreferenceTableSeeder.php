<?php

use Boyhagemann\Pages\Model\PageRepository;
use Boyhagemann\Content\Model\Content;

class PagePreferenceTableSeeder extends Seeder {
    
	public function run()
	{
		DB::table('page_preference')->delete();

	}

}