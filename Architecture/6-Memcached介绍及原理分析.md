##### 1: Memcached 基本信息

- 一个高性能分布式内存缓存服务器

- 基于内存的key-value存储，用来存储小块的任意数据（字符串、对象）

- 不支持数据的持久化, 数据写在内存中,不支持刷到磁盘

- 服务器关闭后数据全部丢失

- 缺乏认证和安全管理,需要安装在防火墙之后

> Memcached 服务器端并没有分布式功能, 各个 Memcached 不会互相通信以共享信息。其分布式的实现取决与客户端实现

![Memcached角色图.jpg](http://oxkadystp.bkt.clouddn.com/Memcached%E8%A7%92%E8%89%B2%E5%9B%BE.jpg)

##### 2: Memcached 特征

- 协议简单

- 基于libevent的事件处理

- 内置内存存储方式

- memcached不互相通信的分布式
