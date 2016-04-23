<?php
	class saveController{
		function index(){
			return "";
		}
		//存储控制器
		//savetemperature方法用来存储温度
		function savetemperature(){
			//创建一个模型用来读取数据	
			$params = $_GET['temperature'];
			$model = M('savetemperature');
			$data = $model->save($params);
		}
	}
?>