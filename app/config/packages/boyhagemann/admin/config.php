<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| routing array
	|--------------------------------------------------------------------------
	|
	| This is passed to the Route::group and allows us to group and filter the
	| routes for our package
	|
	*/
	'preferences' => array(
		array(
			'icon_class' => 'icon-plus',
			'match' => array(
				'alias' => array(
					'*.create'
				),
			)
		),
		array(
			'icon_class' => 'icon-pencil',
			'match' => array(
				'alias' => array(
					'*.edit'
				),
			)
		),
		array(
			'icon_class' => 'icon-th-list',
			'match' => array(
				'alias' => array(
					'*.index'
				),
			)
		),
		array(
			'icon_class' => 'icon-lock',
			'match' => array(
				'alias' => array(
					'*.permissions'
				),
			)
		),
		array(
			'color' => '#C4A029',
			'match' => array(
				'alias' => array(
					'admin.*'
				),
			)
		),
		array(
			'color' => '#49CC5F',
			'match' => array(
				'alias' => array(
					'admin.page.*'
				),
			)
		),
		array(
			'color' => '#947BE0',
			'match' => array(
				'alias' => array(
					'user.*'
				),
			)
		),
		array(
			'color' => '#444444',
			'icon_class' => 'icon-home',
			'match' => array(
				'alias' => array(
					'admin.index'
				),
			)
		),
		array(
			'color' => '#F74FBF',
			'match' => array(
				'alias' => array(
					'admin.resource.*'
				),
			)
		),
	),
	'favorites' => array(
		array(
			'match' => array(
				'alias' => array(
					'admin.index',
					'admin.page.index',
					'admin.layout.index',
					'admin.resource.index',
					'admin.page.create',
					'user.permissions',
					'admin.dashboard-app.index',
				),
			)
		),
	),

);