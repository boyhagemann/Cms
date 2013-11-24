<?php

class GroupsTableSeeder extends Seeder 
{
    const ID_GUEST = 1;
    const ID_ADMIN = 2;
    
	public function run()
	{
		DB::table('groups')->delete();
 
		Sentry::createGroup(array(
            'id' => self::ID_GUEST,
			'name' => 'guest',
		));
 
		Sentry::createGroup(array(
            'id' => self::ID_ADMIN,
			'name' => 'admin',
		));

	}

}