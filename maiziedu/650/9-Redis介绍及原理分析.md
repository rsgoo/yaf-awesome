##### 1: Redis 与 Memcached 对比

- Redis 支持更多的数据存储结构， Memcached 只支持 K-V。

- Redis 支持数据主从复制，既Master-Slave 模式的数据备份。

- Redis 支持数据持久化，可将内存的数据刷到磁盘上，再次使用的时候加载到内存。

- Redis 单个 value 限制是 1GB，Memcached 是 1MB。

- Memcached 适合存储小数据（Session）

##### 2: Redis 的使用

- 集群环境下的充当 Session 管理服务器

- Redis 充当 Web（数据库） 缓存

- Redis 充当消息队列
