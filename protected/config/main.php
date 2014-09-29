<?php

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	//'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Self development books',
        'defaultController'=>'site',
        
        'import'=>array(
            'application.models.*',
        ),
	// application components
	'components'=>array(
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=rozwojowiec',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
			'tablePrefix' => 'yii_',
		),
	),
);