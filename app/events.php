<?php

use Boyhagemann\Admin\Controller\ResourceController;
use Boyhagemann\Pages\Model\Page;

Event::listen('modelBuilder.generator.export', function(Illuminate\Database\Schema\Blueprint $blueprint) {

	if($blueprint->getColumns()) {
		foreach($blueprint->getColumns() as $column) {
			$info[] = sprintf('<li><strong>%s</strong> (%s:%d)</li>', $column->name, $column->type, $column->length);
		}

		$message = sprintf('Columns added to table <strong>%s</strong>: <ul>%s</ul>', $blueprint->getTable(), implode('', $info));
		Session::flash('info', $message);
	}
});



Event::listen('crud::saved', function($model, $controller) {

	if(!$controller instanceof ResourceController) {
		return;
	}

	// Resource controller is unique, but can update itself, allow its id
	$model->rules['controller'] .= ',' . $model->id;

	// Add data
	$model->controller = 'Admin\\' . Str::studly($model->title) . 'Controller';
	$model->path = '../app/controllers';
	$model->save();





	if(Input::get('create_admin')) {

		$generator = App::make('Boyhagemann\Crud\ControllerGenerator');
		$generator->setClassName(str_replace(' ', '', $model->title));
		$generator->setNamespace('Admin');

		$filename = $model->path . '/' . str_replace('\\', '/', $model->controller) . '.php';

		// Write the new controller file to the controller folder
		@mkdir(dirname($filename), 0755, true);
		file_put_contents($filename, $generator->generate());

		Page::createResourcePages($model->title, $model->controller, $model->url);
	}




	if(Input::get('create_front')) {

		$controller = Str::studly($model->title) . 'Controller';
		$layout = 'layouts.default';

		Artisan::call('controller:make', array(
			'name' => $controller,
			'--only' => 'index,show'
		));

		$urlIndex = str_replace('admin/', '', $model->url);
		$aliasIndex = str_replace('admin.', '', $model->alias);

		$urlShow = $urlIndex . '/{id}';
		$aliasShow = $urlIndex . 'show';

		$zone = 'content';
		$method = 'get';

		Page::createWithContent($model->title, $urlIndex, $controller . '@index', $layout, $zone, $method, $aliasIndex);
		Page::createWithContent($model->title, $urlShow, $controller . '@show', $layout, $zone, $method, $aliasShow);

	}


});


Event::listen('formBuilder.build.post', function(Boyhagemann\Form\FormBuilder $fb) {

	if($fb->getName() != 'Boyhagemann\Admin\Controller\ResourceController') {
		return;
	}

	$fb->hidden('controller');
	$fb->hidden('path');
	$fb->checkbox('create_admin')->label('Create admin pages?')->useModel(false)->value(array(1));
	$fb->checkbox('create_front')->label('Create front end pages?')->useModel(false);
	$fb->checkbox('create_app')->label('Create app?')->useModel(false);

});

