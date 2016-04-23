<?php
	class ajaxController{
		function index(){
			return "";
		}
		//存储控制器
		//savetemperature方法用来存储温度
		function gettemperature(){
			//创建一个模型用来读取数据	
			$model = M('gettemperature');
			$data = $model->get();
			echo $data;
		}
	}
?>