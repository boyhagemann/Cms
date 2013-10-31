<?php

use Boyhagemann\Navigation\Model\Container;

class NavigationContainersTableSeeder extends Seeder {

    const MAIN   	= 1;
    const LEFT   	= 2;
    const RIGHT  	= 3;
    const DASHBOARD = 4;
	const FAVORITES = 5;

	public function run()
	{
		DB::table('navigation_containers')->delete();

		Container::create(array(
			'id' => self::MAIN,
			'title' => 'Main navigation',
			'name' => 'main',
		));

		Container::create(array(
			'id' => self::LEFT,
			'title' => 'Left',
			'name' => 'left',
		));

		Container::create(array(
			'id' => self::RIGHT,
			'title' => 'Right',
			'name' => 'right',
		));

		Container::create(array(
			'id' => self::DASHBOARD,
			'title' => 'Dashboard',
			'name' => 'dashboard',
		));

		Container::create(array(
			'id' => self::FAVORITES,
			'title' => 'Favorites',
			'name' => 'favorites',
		));
	}

}