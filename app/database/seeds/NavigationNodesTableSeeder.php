<?php

class NavigationNodesTableSeeder extends Seeder {
    
	public function run()
	{
		DB::table('navigation_nodes')->delete();

	}

}