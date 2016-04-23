<?php
	class saveController{
		//存储控制器
		//savetemperature方法用来存储温度
		function savetemperature($params){
			//创建一个模型用来读取数据	
			$model = M('savetemperature');
			$data = $model->save($params);
		}
	}
?>