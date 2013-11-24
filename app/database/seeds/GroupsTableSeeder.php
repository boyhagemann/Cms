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
            'permissions' => array(
                'view.page.user.login' => 1,
            )
		));
 
		Sentry::createGroup(array(
            'id' => self::ID_ADMIN,
			'name' => 'admin',
            'permissions' => array(
                'view.page.user.permissions' => 1,
            )
		));

	}

}