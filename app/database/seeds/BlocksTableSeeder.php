<?php

use Boyhagemann\Content\Model\Block;

class BlocksTableSeeder extends Seeder
{
    const ID_TEXT   = 1;
    const ID_HEADING    = 2;

    public function run()
    {
        DB::table('blocks')->delete();

        Block::create(array(
            'id' => self::ID_TEXT,
            'title' => 'Text',
            'controller' => 'Boyhagemann\Text\Controller\TextController@textarea',
        ));

        Block::create(array(
            'id' => self::ID_HEADING,
            'title' => 'Heading',
            'controller' => 'Boyhagemann\Text\Controller\TextController@heading',
        ));
    }

}