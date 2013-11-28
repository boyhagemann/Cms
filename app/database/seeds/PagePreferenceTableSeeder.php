<?php

use Boyhagemann\Admin\Model\PagePreferenceRepository;

class PagePreferenceTableSeeder extends Seeder {
    
	public function run()
	{
		DB::table('page_preference')->delete();

		$admin = Sentry::findUserByCredentials(array('email' => 'admin@admin.nl'));

		PagePreferenceRepository::createDefaultsForUser($admin);
	}

}