<?php

use Boyhagemann\Content\Model\Block;

class BlocksTableSeeder extends Seeder {

	public function run()
	{
		DB::table('blocks')->delete();

		Block::create(array(
			'title' => 'Text',
			'controller' => 'Boyhagemann\Text\Controller\TextController@textarea',
		));

		Block::create(array(
			'title' => 'Heading',
			'controller' => 'Boyhagemann\Text\Controller\TextController@heading',
		));
	}

}