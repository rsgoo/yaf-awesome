##### 1：MyISAM内存优化

- key_buffer_size

> 索引缓存块的大小，直接决定 **MyISAM** 表的存取效率，建议 **1/4** 可用内存

> show variables like '%key%';

```
[myisamchk]
key_buffer = 20M
sort_buffer_size = 20M
read_buffer = 2M
write_buffer = 2M

```

##### 2：InnoDB内存优化

- innodb_buffer_pool_size

> 存储引擎表数据和索引数据的最大缓存大小

##### 3：MySQL并发相关参数

![MySQL并发相关参数](http://oxkadystp.bkt.clouddn.com/MySQL%E5%B9%B6%E5%8F%91%E7%9B%B8%E5%85%B3%E5%8F%82%E6%95%B0.PNG)

- max_connections;

	> show variables like '%connections%';
