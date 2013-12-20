<?php

use Boyhagemann\Admin\Model\PageFavoriteRepository;

class PageFavoriteTableSeeder extends Seeder {
    
	public function run()
	{
		DB::table('page_favorite')->delete();

		$admin = Sentry::findUserByCredentials(array('email' => 'admin@admin.nl'));

		PageFavoriteRepository::createDefaultsForUser($admin);
	}

}