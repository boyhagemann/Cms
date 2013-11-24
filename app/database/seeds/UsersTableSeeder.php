<?php

class UsersTableSeeder extends Seeder 
{
    
	public function run()
	{
		DB::table('users')->delete();
 
		$guest = Sentry::createUser(array(
			'email' => 'guest',
			'password' => 'guest',
            'activated' => true,
		));
 
		$admin = Sentry::createUser(array(
			'email' => 'admin@admin.nl',
			'password' => 'admin',
            'activated' => true,
		));

        $admin->addGroup(Sentry::findGroupByName('admin'));
        $guest->addGroup(Sentry::findGroupByName('guest'));
	}

}