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
Event::subscribe('Boyhagemann\Admin\Subscriber\ShowHelpPageWhenResourceHasNoFormElements');
Event::subscribe('Boyhagemann\Admin\Subscriber\AddUniqueRuleToResource');

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
 * Form hooks
 */
Event::subscribe('Boyhagemann\Form\Subscriber\FillFormWithErrorsFromSession');
Event::subscribe('Boyhagemann\Form\Subscriber\SaveFormStateInSession');

/**
 * Text hooks
 */
Event::subscribe('Boyhagemann\Text\Subscriber\AddTextDirectlyFromSection');

/**
 * User hooks
 */
//Event::subscribe('Boyhagemann\User\Subscriber\CheckPermissionsForFormElements');




Event::listen('user.permissions', function(Boyhagemann\User\PermissionRepository $repository) {

	$repository->setPermissions('Users', array(
		'edit.user' => 'Can edit user profile',
	));

	$repository->setPermissions('Resource form', array(
		'view.form.Boyhagemann\Admin\Controller\ResourceController.element.title' => 'Can view title element',
	));

});
