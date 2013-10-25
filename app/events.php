<?php



Event::listen('modelBuilder.generator.export', function(Illuminate\Database\Schema\Blueprint $blueprint) {

	if($blueprint->getColumns()) {
		foreach($blueprint->getColumns() as $column) {
			$info[] = sprintf('<li><strong>%s</strong> (%s:%d)</li>', $column->name, $column->type, $column->length);
		}

		$message = sprintf('Columns added to table <strong>%s</strong>: <ul>%s</ul>', $blueprint->getTable(), implode('', $info));
		Session::flash('info', $message);
	}
});



View::creator('layouts.admin', function(Illuminate\View\View $view) {

	$route = Route::currentRouteName();

	if(strrpos($route, '.index') !== false) {

		$view->with('menuLeft', array(
			array(
				'label' => 'Dashboard',
				'route' => 'admin.index',
				'method' => 'get',
			)
		));
	}


});