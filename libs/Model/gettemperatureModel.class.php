<?php
	class gettemperatureModel{
		//此模型用来获取温度
		
		public function get()
		 {
			$result = DB::$db->query("SELECT * FROM temperature");
			$data = DB::$db->findAll($result);
			if(isset($data)&&!empty($data)){
				$result = '{"success": true,"msg": "温度获取成功","temperature":'.$data['0']['temperature'].'}';
			}else{
				$result = "{'success': false,'msg': '温度获取失败'}";
			}
			//设置以json格式返回数据
			//猜测可设置不用cache
			header("Content-type:application/json;charset=utf-8");
			header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
			header("Pragma: no-cache"); // HTTP 1.0.
			header("Expires: 0"); // Proxies.
			return $result;
			//return $data['0']['temperature'];
		 } 
	}
?>