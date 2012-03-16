<?php

/**
 * Global configurations.
 */

return array_merge_recursive(array(
	'includePaths' => array(
        'library' => APPLICATION_PATH . '/library',
    	),
    'pluginPaths' => array(
    	),
	'bootstrap' => array(
		'path' => APPLICATION_PATH . '/Bootstrap.php',
		'class' => 'Bootstrap',
		),
	'autoloaderNamespaces' => array(
		),
	'appnamespace' => 'Application',
	'resources' => array(
		'frontController' => array(
			'controllerDirectory' => APPLICATION_PATH . '/controllers',
			'moduleDirectory' => APPLICATION_PATH . '/modules',
			'actionhelperpaths' => array(
				),
			),
		'modules' => array(
			),
		'layout' => array(
			'layoutPath' => APPLICATION_PATH . '/layouts/scripts',
			'layout' => 'default',
			),
		'view' => array(
			'encoding' => 'UTF-8',
			'basePath' => APPLICATION_PATH . '/views',
			'helperPath' => array(
				),
			'filterPath' => array(
				),
			),
		),
	), include dirname(__FILE__) . '/' . APPLICATION_ENV . '.config.php');
