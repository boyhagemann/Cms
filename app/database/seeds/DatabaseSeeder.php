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

		 $this->call('AdminAppTableSeeder');
		 $this->call('ResourcesTableSeeder');
		 $this->call('LayoutsTableSeeder');
		 $this->call('BlocksTableSeeder');
		 $this->call('PagesTableSeeder');
	}

}