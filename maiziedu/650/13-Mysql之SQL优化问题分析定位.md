##### 1: 分析SQL执行效率

- show status

- show status like 'com_delete';   #查看删除操作执行次数

##### 2: 定位执行效率低的SQL

- 慢查询日志定位，查询结束记录

	> -log-slow-queries = fileNames;

- show processlist  

	> 查看当前正在进行的线程，包括线程状态，是否锁表

##### 3: 分析SQL执行计划

- explain

- desc

	> desc select * from tableName
	```
		id: 1
		select_type: SIMPLE		//SIMPLE简单表，不适用表连接或子查询
		table: artist			 //使用的表名
		type: ALL				 //ALL全表扫描，index索引
		possible_keys: NULL		 //可能用到的key, 索引值
		key: NULL
		key_len: NULL
		ref: NULL
		rows: 932
		Extra:
	```

##### 4：show profile 分析SQL

- select @@have_profiling   #查看是否支持

- select @@profiling;    	#查看是否开启，0表示没有开启

- set profiling=1;          #开启

	![](http://oxkadystp.bkt.clouddn.com/mysql-show-profile%E5%88%86%E6%9E%90.PNG)
