<?php
	class gettemperatureModel{
		//此模型用来获取温度
		
		public function get()
		 {
			$result = DB::$db->query("SELECT * FROM temperature");
			$data = DB::$db->findAll($result);
			return $data['0']['temperature'];
		 } 
	}
?>