<?php
return array(
	//'配置项'=>'配置值'
	'DB_TYPE' => 'mysql',
	'DB_HOST' => 'localhost',
	'DB_NAME' => 'cdms',
	'DB_USER' => 'root',
	'DB_PSW' => '',
	'DB_PORT' => 3306,
	'DB_PREFIX' => 'think_',
	'LOAD_EXT_CONFIG' => 'user,db',
	'URL_ROUTER_ON'   => true, //开启路由
	
	'URL_ROUTE_RULES' => array(
		'/base\/*/' => 'error/urlerror',

		't/:team_id' => 'c/visitor',
		'users/:user_id/:operate' => 'users/index',
		'users/searchUser' => 'users/searchUser',
		'users/:user_id' => 'users/index',

		'wiki/:item' => 'wiki/',
		'index/:operate' => 'index/',
		'c/code/:token' => 'c/code',
		'c/:cmpt_id/:operate/:param' => 'c/',
		'c/:cmpt_id/:operate' => 'c/',
		'c/:cmpt_id' => 'c/',
		
		'inclass/c/:id/:operate/:param' => 'inclass/c/index',
		'inclass/c/:id/:operate' => 'inclass/c/index',
		'inclass/c/:id' => 'inclass/c/index',
		
		'inclass/competitions/:operate/:param/:step' => 'inclass/competitions/index',
		'inclass/competitions/:operate/:param' => 'inclass/competitions/index',
		'inclass/competitions/:operate' => 'inclass/competitions/index',

		'Host/Create/:operate/:step' => 'Host/Create/index',
		'Host/Create/:operate' => 'Host/Create/index'
	
	),

	'USER_STATUS' => array(
		'INACTIVE' => 0,
		'NORMAL' => 1,
		'LOCKED' => 2,
	),
	
	'MESSAGE_TYPE' => array(
		'SUPPORT' => 1,
		'PUBLISH' => 2,
		'LAW' => 3,
		'QUOTE' => 4,
		'CONNECT' => 5,
		'RESEARCH' => 6,
		'ADVICE' => 7
	),
	
	'DEFAULT_PASSWORD' => "123456",
);
?>