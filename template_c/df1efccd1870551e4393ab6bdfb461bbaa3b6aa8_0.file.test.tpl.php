<?php
/* Smarty version 3.1.29, created on 2016-04-23 09:40:14
  from "D:\Program Files\wamp\www\TPS\tpl\test.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_571b26dea78315_91193333',
  'file_dependency' => 
  array (
    'df1efccd1870551e4393ab6bdfb461bbaa3b6aa8' => 
    array (
      0 => 'D:\\Program Files\\wamp\\www\\TPS\\tpl\\test.tpl',
      1 => 1461397213,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_571b26dea78315_91193333 ($_smarty_tpl) {
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>MVC</title>
		<style type="text/css">
		h1{
			color:red;
			text-align:center;
			background-color:blue;
		}
		p{
			font-size:50px;	
		}
		</style>
    </head>
    <body>
        <h1>温度实时发布</h1>
		<p>实时温度：</p><p><?php echo $_smarty_tpl->tpl_vars['str']->value;?>
</p>
    </body>
</html><?php }
}
