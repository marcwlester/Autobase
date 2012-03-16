<?php

return array(
	'phpSettings' => array(
        'display_startup_errors' => 1,
        'display_errors' => 1,
        'error_reporting' => (E_ALL ^ E_NOTICE)
        ),
    'resources' => array(
		'frontController' => array(
			'params' => array(
				'displayExceptions' => 1,
				),
			),
		'db' => array(
			'adapter' => 'PDO_MYSQL',
			'params' => array(
				'dbname' => 'autobase',
				'username' => 'root',
				'password' => '',
				'host' => 'localhost',
				'profiler' => array(
					'enabled' => true,
					'class' => 'Zend_Db_Profiler_Firebug',
					),
				),
			),
		),
	);
