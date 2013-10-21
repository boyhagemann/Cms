<?php

use Boyhagemann\Pages\Model\Layout;

class LayoutsTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('layouts')->delete();

        Layout::create(array(
            'id' => 1,
            'title' => 'Admin',
            'name' => 'layouts.admin',
            'main_section_id' => 1,
        ));

        Layout::create(array(
            'id' => 2,
            'title' => 'Default',
            'name' => 'layouts.default',
            'main_section_id' => 2,
        ));
    }

}