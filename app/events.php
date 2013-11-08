<?php

use Boyhagemann\Admin\Controller\ResourceController;


Event::subscribe('Boyhagemann\Admin\Subscriber\AddControllerAndPathsToResource');
Event::subscribe('Boyhagemann\Admin\Subscriber\AddGenerateFrontHookToResource');
Event::subscribe('Boyhagemann\Admin\Subscriber\AddGenerateAdminHookToResource');



Event::subscribe('Boyhagemann\Content\Subscriber\AddContentOnResourcePage');
Event::subscribe('Boyhagemann\Content\Subscriber\AddContentOnPage');
Event::subscribe('Boyhagemann\Content\Subscriber\HandleRedirectResponse');


Event::listen('crud::saved', function($model, $controller) {

	if(!$controller instanceof ResourceController) {
		return;
	}

	// Resource controller is unique, but can update itself, allow its id
	$model->rules['controller'] .= ',' . $model->id;
	$model->save();

});


