<?php

return array(
    'resources' => array(
		'frontController' => array(
			'params' => array(
				'displayExceptions' => 0,
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
					'enabled' => false,
					),
				),
			),
		),
	);
