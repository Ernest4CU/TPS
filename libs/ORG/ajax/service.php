<?php
	header("Content-type:text/plain;charset=utf8");
	//实现数据库数据查询
	//首先先引入数据库工工厂类
	//其次引入mysqliDb
	
	require_once('../../../framework/libs/core/DB.class.php');
	require_once('../../../framework/libs/db/mysqliDb.class.php');
	require_once('../../../config.php');
	//echo返回最近的温度值

	
	getTemperature($config);
	
	function getTemperature($tempconfig){
		DB::init('mysqliDb',$tempconfig['dbconfig']);
		$result = DB::$db->query("SELECT * FROM temperature");
		$data = DB::$db->findAll($result);
		header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
		header("Pragma: no-cache"); // HTTP 1.0.
		header("Expires: 0"); // Proxies.
		echo $data['0']['temperature'];
	}
?>