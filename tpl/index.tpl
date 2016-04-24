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
<script>
	timeId = setInterval("getTemperature();",5000);
	function getTemperature(){
		var request =new XMLHttpRequest();
		//request.open("GET","?controller=ajax&method=gettemperature&time="+new Date().getTime());
		request.open("GET","?controller=ajax&method=gettemperature");
		//request.open("GET","libs/ORG/ajax/service.php");
		request.send();
		request.onreadystatechange=function(){
			if(request.readyState === 4&&request.status === 200){
			//做一些事情 request.responseText
				var data = JSON.parse(request.responseText);
				if(data.success){
					document.getElementById("showTemperature").innerHTML=data.temperature;
				}else{
					document.getElementById("showTemperature").innerHTML="出现错误："+data.msg;
				}
			}
		}
	}
</script>
</body>
</html>