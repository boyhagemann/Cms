<?php

use Boyhagemann\Admin\Model\ResourceRepository;

class FilesTableSeeder extends Seeder {

	public function run()
	{
		DB::table('files')->delete();
	}

}