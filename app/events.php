<?php


Event::listen('crudController.init', function(Boyhagemann\Crud\CrudController $controller) {

	if(!$controller->getFormBuilder()->getElements()) {

		View::composer('layouts.default', function($layout) {
			$layout->content = View::make('message.form');
		});
	}

	// Change the title of the App controller
	if($controller instanceof Boyhagemann\Admin\Controller\AppController) {
		Config::set('crud::config.title', 'Apps');
	}



	$key = 'admin::navigation.' . Route::currentRouteName();

	if(Request::getMethod() != 'GET') {
		return;
	}

	if(!Config::get($key)) {

		$name = $controller->getModelBuilder()->getName();
		$baseRoute = $controller->getBaseRoute();

		$navigation = array(
			$baseRoute . '.index' => array(
				'menuLeft' => array(
					array(
						'route' => 'admin',
						'label' => 'Dashboard',
					),
				),
				'menuRight' => array(
					array(
						'route' => $baseRoute . '.create',
						'label' => 'Create',
					),
				),
			),
			$baseRoute . '.edit' => array(
				'menuLeft' => array(
					array(
						'route' => $baseRoute . '.index',
						'label' => $name,
					),
				),
				'menuRight' => array(
					array(
						'method' => 'delete',
						'route' => $baseRoute . '.destroy',
						'label' => 'Delete',
					),
				),
			),
			$baseRoute . '.create' => array(
				'menuLeft' => array(
					array(
						'route' => $baseRoute . '.index',
						'label' => $name,
					),
				),
			),
		);

		Config::set($key, $navigation[Route::currentRouteName()]);

	}

});

Event::listen('modelBuilder.generator.export', function(Illuminate\Database\Schema\Blueprint $blueprint) {

	if($blueprint->getColumns()) {
		foreach($blueprint->getColumns() as $column) {
			$info[] = sprintf('<li><strong>%s</strong> (%s:%d)</li>', $column->name, $column->type, $column->length);
		}

		$message = sprintf('Columns added to table <strong>%s</strong>: <ul>%s</ul>', $blueprint->getTable(), implode('', $info));
		Session::flash('info', $message);
	}
});