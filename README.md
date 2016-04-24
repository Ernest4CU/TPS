TPS
==========
Wamp工作环境
单一入口机制
-------------------
##主入口
  http://localhost/tps/
##数据存储入口	
  http://localhost/tps?controller=save&method=savetemperature&temperature=11.2
  http://localhost/tps/libs/ORG/dataSave.php?temperature=25.6
##现有控制器和方法
	Controller:			method:
	index				index
	
	save				index
						savetemperature
						
	ajax				index
						gettemperature