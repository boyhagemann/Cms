<?php

use Boyhagemann\Pages\Model\Block;

class BlocksTableSeeder extends Seeder {

	public function run()
	{
		DB::table('blocks')->delete();

		Block::create(array(
			'title' => 'Page overview',
			'controller' => 'Boyhagemann\Pages\Controller\PageController@index',
		));
	}

}