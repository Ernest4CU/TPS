<?php
/* Smarty version 3.1.29, created on 2016-04-23 09:48:14
  from "D:\Program Files\wamp\www\TPS\tpl\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_571b28bea7f7e2_92862267',
  'file_dependency' => 
  array (
    '6337d6d9d05983b8550449bf327b3ee8d7e6cff6' => 
    array (
      0 => 'D:\\Program Files\\wamp\\www\\TPS\\tpl\\index.tpl',
      1 => 1461397693,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_571b28bea7f7e2_92862267 ($_smarty_tpl) {
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf8">
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
<p style="font-size:50px">温度值为：<span id="showTemperature"></span>℃</p>
<?php echo '<script'; ?>
>
	timeId = setInterval("getTemperature();",500);
	function getTemperature(){
		var request =new XMLHttpRequest();
		request.open("GET","libs/ORG/ajax/service.php");
		request.send();
		request.onreadystatechange=function(){
			if(request.readyState === 4&&request.status === 500){
			//做一些事情 request.responseText
			
				document.getElementById("showTemperature").innerHTML=request.responseText;
			}
		}
	}
	//timeId = setInterval("alert('ok');",500);
	/*
	document.getElementById("fresh").onclick=function(){
		//发送Ajax查询请求并处理
		var request =new XMLHttpRequest();
		request.open("GET","service.php");
		request.send();
		request.onreadystatechange=function(){
			if(request.readyState === 4&&request.status === 200){
			//做一些事情 request.responseText
			
				document.getElementById("showTemperature").innerHTML=request.responseText;
			}
		}
	}*/
<?php echo '</script'; ?>
>
</body>
</html><?php }
}