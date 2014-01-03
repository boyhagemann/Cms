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

		 $this->call('GroupsTableSeeder');
		 $this->call('UsersTableSeeder');
		 $this->call('LayoutsTableSeeder');
		 $this->call('SectionsTableSeeder');
		 $this->call('ContentTableSeeder');
		 $this->call('PagesTableSeeder');
		 $this->call('ResourcesTableSeeder');
		 $this->call('BlocksTableSeeder');
		 $this->call('NavigationContainersTableSeeder');
		 $this->call('NavigationNodesTableSeeder');
		 $this->call('FilesTableSeeder');
		 $this->call('PagePreferenceTableSeeder');
		 $this->call('PageFavoriteTableSeeder');
	}

}