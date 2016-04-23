<?php
	class savetemperatureModel{
		//此模型用来存储传来的温度
		//存储之前先删除数据库中的所有数据
		public function save($temperature)
		 {		 
			DB::$db->del('temperature',1);
			$arr = array(
				'temperature' => $temperature
			);
			DB::$db->insert('temperature',$arr);
		 } 
	}
?>