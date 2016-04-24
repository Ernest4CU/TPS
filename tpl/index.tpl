<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<title>Demo</title>
<style>
	h1{
	background-color:red;
	text-align:center;
	font-size:100px;
	}
</style>
</head>
<body>
<h1>温度实时显示</h1>
<p style="font-size:50px">温度值为：<span id="showTemperature">{$str}</span>℃</p>
<script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.js"></script>
<script>
	function getTemperature(){
			$.ajax({
				type:"GET",
				url:"?controller=ajax&method=gettemperature",
				dataType:"json",
				success:function(data){
					if(data.success){
						$("#showTemperature").html(data.temperature);
					}else{
						$("#showTemperature").html(data.msg);
					}
				},
				error:function(jqXHR){
					alert("发生错误："+jqXHR.status);
				}
			});
		}
	timeId = setInterval("getTemperature();",5000);
</script>
</body>
</html>