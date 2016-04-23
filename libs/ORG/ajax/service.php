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
		echo $data['0']['temperature'];
	}
?>