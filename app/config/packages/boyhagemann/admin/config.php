<?php


return array(

	'preferences' => array(
		'unique' => array('page_id', 'user_id'),
		'defaults' => array(
			'page_id' => function($page) {
				return $page->id;
			},
		),
		'tags' => array('admin', 'guest'),
		'match' => array(

			array(
				'property' => 'alias',
				'endsWith' => '.create',
				'provide' => array(
					'icon_class' => 'icon-plus',
				),
			),
			array(
				'property' => 'alias',
				'endsWith' => '.edit',
				'provide' => array(
					'icon_class' => 'icon-pencil',
				),
			),
			array(
				'property' => 'alias',
				'endsWith' => '.index',
				'provide' => array(
					'icon_class' => 'icon-th-list',
				),
			),
			array(
				'property' => 'alias',
				'endsWith' => '.permissions',
				'provide' => array(
					'icon_class' => 'icon-lock',
				),
			),
			array(
				'property' => 'alias',
				'startsWith' => 'admin.',
				'provide' => array(
					'color' => '#C4A029',
				),
			),
			array(
				'property' => 'alias',
				'startsWith' => 'admin.page.',
				'provide' => array(
					'color' => '#67AF2B',
				),
			),
			array(
				'property' => 'alias',
				'startsWith' => 'admin.layout.',
				'provide' => array(
					'color' => '#61ADA7',
				),
			),
			array(
				'property' => 'alias',
				'startsWith' => 'admin.resource.',
				'provide' => array(
					'color' => '#E047C9',
				),
			),
			array(
				'property' => 'alias',
				'startsWith' => 'admin.dashboard-app.',
				'provide' => array(
					'color' => '#7B5CA5',
				),
			),
			array(
				'property' => 'alias',
				'startsWith' => 'user.',
				'provide' => array(
					'color' => '#ADC149',
				),
			),
			array(
				'property' => 'alias',
				'equals' => 'admin.index',
				'provide' => array(
					'color' => '#444444',
					'icon_class' => 'icon-home',
				),
			),
			array(
				'property' => 'alias',
				'equals' => 'admin.content.switch',
				'provide' => array(
					'color' => '#444444',
					'icon_class' => 'icon-eye-open',
				),
			),
			array(
				'property' => 'alias',
				'equals' => 'user.logout',
				'provide' => array(
					'color' => '#444444',
					'icon_class' => 'icon-unlock',
				),
			),

		),
	),

	'favorites' => array(
		'defaults' => array(
			'page_id' => function($page) {
				return $page->id;
			},
		),
		'match' => array(
			array(
				'property' => 'alias',
				'equals' => 'admin.index',
				'provide' => array(
					'order' => 0,
				)
			),
			array(
				'property' => 'alias',
				'equals' => 'admin.content.switch',
				'provide' => array(
					'order' => 1,
				)
			),
			array(
				'property' => 'alias',
				'equals' => array(
					'admin.page.index',
					'admin.layout.index',
					'admin.resource.index',
					'admin.page.create',
					'user.permissions',
					'admin.dashboard-app.index',
					'admin.users.index',
				),
				'provide' => array(
					'order' => 2,
				)
			),
			array(
				'property' => 'alias',
				'equals' => 'user.logout',
				'provide' => array(
					'order' => 3,
				)
			),
		)
	),

);