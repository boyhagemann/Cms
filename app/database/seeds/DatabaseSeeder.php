<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		 $this->call('AdminAppsTableSeeder');
		 $this->call('ResourcesTableSeeder');
		 $this->call('LayoutsTableSeeder');
		 $this->call('SectionsTableSeeder');
		 $this->call('ContentTableSeeder');
		 $this->call('PagesTableSeeder');
	}

}