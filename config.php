<?php
$config = array(
	'viewconfig'=>array(
		'left_delimiter' => '{',
		'right_delimiter' => '}',
		'template_dir' => 'tpl',
		'compile_dir' => 'template_c',
		'cache_dir' => 'cache',
		'caching'=>'false',
		'cache_lifetime'=>'0'
	),
	'dbconfig'=>array(
		'dbhost' => 'localhost',
		'dbuser' => 'root',
		'dbpsw' => '',
		'dbname' => 'tempdata',
		'dbcharset' => 'utf8'
	),
	'controllerAllow'=>array(
		'index',
		'save',
		'ajax'
	),
	'methodAllow'=>array(
		'index',
		'savetemperature',
		'gettemperature'
	)
);
?>