<?php

class UsersTableSeeder extends Seeder 
{
    
	public function run()
	{
		DB::table('users')->delete();
 
		Sentry::createUser(array(
			'email' => 'admin@admin.nl',
			'password' => 'admin',
            'activated' => true,
		));

	}

}