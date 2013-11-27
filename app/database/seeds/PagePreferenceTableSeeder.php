<?php

use Boyhagemann\Admin\Model\PagePreference;
use Boyhagemann\Pages\Model\Page;

class PagePreferenceTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('page_preference')->delete();

		PagePreference::create(array(
			'user_id' => Sentry::findUserByCredentials(array('email' => 'admin@admin.nl'))->id,
			'page_id' => Page::whereAlias('admin.dashboard-app.index')->first()->id,
			'color' => '#46CE57',
			'icon_class' => 'icon-cog',
		));

	}

}