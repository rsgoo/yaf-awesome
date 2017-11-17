##### 1：授权用户

- 在主数据库中建立需同步的账号

	```sql
	grant repalication slave on *.* to "userName"@"hostName" identified by 'password';

	flush privileges;

	```

##### 2：修改MySQL的主配置文件 *my.cnf*

```
log-bin = mysql-bin       //必须启用二进制日志
server-id = 2                //服务器唯一id,默认是1，主从不相同
```


##### 3：Slaver配置
