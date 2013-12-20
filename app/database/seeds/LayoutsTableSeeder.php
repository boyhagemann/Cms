<?php

use Boyhagemann\Pages\Model\Layout;

class LayoutsTableSeeder extends Seeder
{
    const ID_ADMIN      = 1;
    const ID_DEFAULT    = 2;

    public function run()
    {
        DB::table('layouts')->delete();

        $admin = Layout::create(array(
            'id' => self::ID_ADMIN,
            'title' => 'Admin',
            'name' => 'layouts.admin',
        ));
        $admin->sections()->sync(array(
            SectionsTableSeeder::JUMBOTRON,
            SectionsTableSeeder::CONTENT,
            SectionsTableSeeder::SIDEBAR,
            SectionsTableSeeder::TOOLS,
            SectionsTableSeeder::NAVBAR,
            SectionsTableSeeder::TOP,
            SectionsTableSeeder::FAVORITES,
        ));
        $admin->save();

        $default = Layout::create(array(
            'id' => self::ID_DEFAULT,
            'title' => 'Default',
            'name' => 'layouts.default',
        ));
        $default->sections()->sync(array(
            SectionsTableSeeder::CONTENT,
            SectionsTableSeeder::SIDEBAR,
            SectionsTableSeeder::TOOLS,
        ));
        $default->save();
    }

}