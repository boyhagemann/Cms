<?php

use Boyhagemann\Admin\Controller\ResourceController;


/**
 * Model hooks
 */
Event::subscribe('Boyhagemann\Model\Subscriber\GenerateModelAndRepository');

/**
 * Crud hooks
 */
Event::subscribe('Boyhagemann\Crud\Subscriber\BuildModelWhenFormIsReady');

/**
 * Admin hooks
 */
Event::subscribe('Boyhagemann\Admin\Subscriber\AddControllerAndPathsToResource');
Event::subscribe('Boyhagemann\Admin\Subscriber\AddGenerateAdminHookToResource');
Event::subscribe('Boyhagemann\Admin\Subscriber\AddGenerateFrontHookToResource');
Event::subscribe('Boyhagemann\Admin\Subscriber\AddDashboardNavigationForResource');
Event::subscribe('Boyhagemann\Admin\Subscriber\RedirectToResource');
Event::subscribe('Boyhagemann\Admin\Subscriber\SwitchContentMode');
Event::subscribe('Boyhagemann\Admin\Subscriber\ShowHelpPageWhenResourceHasNoFormElements');

/**
 * Content hooks
 */
Event::subscribe('Boyhagemann\Content\Subscriber\AddContentOnResourcePage');
Event::subscribe('Boyhagemann\Content\Subscriber\AddContentOnPage');
Event::subscribe('Boyhagemann\Content\Subscriber\HandleRedirectResponse');
Event::subscribe('Boyhagemann\Content\Subscriber\ChangeCrudTitle');
Event::subscribe('Boyhagemann\Content\Subscriber\ReorderBlocksInSection');

/**
 * Navigation hooks
 */
Event::subscribe('Boyhagemann\Navigation\Subscriber\AddResourceLeftRightNavigation');

/**
 * Pages hooks
 */
Event::subscribe('Boyhagemann\Pages\Subscriber\SetPermissionsForViewingPage');

/**
 * Text hooks
 */
Event::subscribe('Boyhagemann\Text\Subscriber\AddTextDirectlyFromSection');



Event::listen('crud::saved', function($model, $controller) {

	if(!$controller instanceof ResourceController) {
		return;
	}

	// Resource controller is unique, but can update itself, allow its id
	$model->rules['controller'] .= ',' . $model->id;
	$model->save();

});


