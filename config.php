<?php
$config = array(
	'viewconfig'=>array(
		'left_delimiter' => '{',
		'right_delimiter' => '}',
		'template_dir' => 'tpl',
		'compile_dir' => 'template_c',
		'cache_dir' => 'cache'
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
		'save'
	),
	'methodAllow'=>array(
		'index',
		'savetemperature'
	)
);
?>