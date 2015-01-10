<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Web Application',
    //'theme'=>'theme1',	
	//'sourceLanguage' => 'ja',
    'language' => 'en', //vi|en|jp
    //'defaultController' => '/',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'1',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
        'staff',
		'manufacturer',
		'category',
		'product',        
	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
            'autoRenewCookie' => true,
            'authTimeout' => 60*60, //1h
            'loginUrl' => array('/staff/default/login'),            
            'returnUrl' => '/site/index',
		),
		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
			'urlFormat'=>'path',
            'showScriptName' => false,
			'rules'=>array(
                'contact-us.html' => '/site/contact',
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		
		/*'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),*/
		// uncomment the following to use a MySQL database

		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=pro1',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
		),
        
        // Second Database config
		/*
		'db2'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=example2',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
            'class' => 'CDbConnection'
		),
		*/
		// Database with slave config
		/*'db'=>array(
            'class'=>'DbConnectionMan',//Specify it,instead of CDbConnection,other options is same as CDbConnection
            'connectionString' => 'mysql:host=localhost;dbname=test',
            'emulatePrepare' => true,
            'username' => 'root',
            'password' => 'root',
            'charset' => 'utf8',
            'enableSlave'=>true,//Read write splitting function is swithable.You can specify this value to false to disable it.
            'slaves'=>array(//slave connection config is same as CDbConnection
                array(
                    'connectionString'=>'mysql:host=slave1;dbname=xxx',
                    'username'=>'root',
                    'password'=>'root'
                ),
                array(
                    'connectionString'=>'mysql:host=slave2;dbname=xxx',
                    'username'=>'demo',
                    'password'=>'xxx'
                ),
            ),
        ),*/
        
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
        //Override HTTPRequest Class
        'request' => array(
            'class' => 'HttpRequest',
        ),
        // Register Utility Class
		// Call uses Yii::app()->utils->function_name();
		'utils'=>array(
			'class'=>'Utility',
			'name' => 'Nguyen Nhu Tuan',
		),
        // Enable cache file
		'cache'=>array(
           'class'=>'system.caching.CFileCache',
        ),
        // Client packet script defined
		'clientScript'=>array(
            'packages'=>array(
				// Override jquery core packet
                'jquery'=>array(
                    'baseUrl'=> 'js/',
                    'js'=>array('jquery-2.1.1.min.js','jquery-migrate-1.2.1.min.js'),
                ),
				// Example resource for site
				'site_resource'=>array(
                    'baseUrl'=> '',
					'css' => array('css/reset.css','css/template-free.css'),
                    'js'=>array('js/main.js'),
					'depends' => array('jquery'),
                ),
            ),
        ),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);
