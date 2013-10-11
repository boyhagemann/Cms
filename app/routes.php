<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array('as' => 'home', function()
{

}));



Route::when('admin', array('dashboard','admin'));
Route::when('admin/*', 'admin');

Route::filter('dashboard', function() {

	$apps = App::make('Boyhagemann\Admin\Model\App')->all();
	$config = array();

	foreach($apps as $app) {
		$config[] = $app->toArray();
	}

	Config::set('admin::dashboard', $config);

});


Route::resource('admin/apps', 'Boyhagemann\Admin\Controller\AppController');