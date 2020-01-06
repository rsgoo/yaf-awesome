#### 写在前面

> 为了避免单台机器故障导致的数据丢失，我们需要将数据复制多份部署到多台不同的服务器上，这样即使一台服务器出现故障，别的服务器依然能提供服务。 这也要求一台服务器数据更新以后，自动同步更新到其他服务器上。

Redis 如何实现主从复制功能

> Redis 提供了复制（Replication）功能来实现多台 Redis 服务器的数据同步

> 通过部署多台 Redis 机器，并在配置文件中指定者几台 Redis 服务器之间的主从关系。主负责写入数据，同时将数据实时同步到从机器上。Redis默认Master用于写，Slave用于读。向 Slave 写数据会导致错误。

##### 环境准备

- OS：linux Deepin 15.6

- Redis：[4.0.11](http://download.redis.io/releases/redis-4.0.11.tar.gz)


##### Redis 安装

-  ```tar -zxvf redis-4.0.11.tar.gz```
-  ```mv redis-4.0.11 redis``` 

-  ```cd redis```

-  ```make && make install``` 

##### Redis集群配置 

- 切换到Redis目录下

- 新建一个 redis.6380.conf 文件作为 master, 并写入如下内容

```php
#导入原始配置文件
include    /home/inscode/Downloads/redis/redis.conf
  
#守护进程  
daemonize  yes

#端口
port       6380

#进程文件
pidfile    /var/run/redis/redis_6380.pid

#日志文件
logfile    /var/log/redis/redis-6380.log

#RDB文件
dbfilename redis-dump-6380.rdb

```

- 新建三个文件 ```redis.6381.conf```, ```redis.6382.conf```, ```redis.6382.conf``` 作为三个slave的配置文件, 编辑如下

    - 由于三个配置文件内容相似，这里1️以6381.conf举例，别的两个替换为对应的638X即可。 

```php
#导入原始配置文件
include    /home/inscode/Downloads/redis/redis.conf
  
#守护进程  
daemonize  yes

#端口
port       6381

#进程文件
pidfile    /var/run/redis/redis_6381.pid

#日志文件
logfile    /var/log/redis/redis-6381.log

#RDB文件
dbfilename redis-dump-6381.rdb

##>> 敲黑板，划重点 <<##
#配置当前redis实例是那个master实例的slave
slaveof    127.0.0.1 6380

```

- 启动四个Redis服务的 Server 进程

```
redis-server redis.6380.conf   //启动master

redis-server redis.6381.conf   //启动slave

redis-server redis.6382.conf   //启动slave

redis-server redis.6383.conf   //启动slave
```

- 查看 Server启动情况

``` ps -aux |grep redis-server```

    运气不错，四台server正常 (*^▽^*)

![redis-ps-aux](http://oxkadystp.bkt.clouddn.com/Redis-ps-aux.png)

- 针对四个server服务依次启动四个redis-cli程序

```
## 启动master的cli
redis-cli -p 6380

## 启动6381 slave 的cli
redis-cli -p 6381

## 启动6382 slave 的cli
redis-cli -p 6382

## 启动6383 slave 的cli
redis-cli -p 6383


```
- 在 打开的redis-cli 6380中通过 ** ```INFO replication``` ** 查看当前机器的角色

![image](http://oxkadystp.bkt.clouddn.com/redis-6380-info.png)

- 在 打开的redis-cli 6381 {6382 与 6383 类似}中通过 **```INFO replication```** 查看 slave 信息

![image](http://oxkadystp.bkt.clouddn.com/redis-6381-info.png)

- 由于在 master-slave模型中，master赋值写，slave负责读

    - 在 6380 master 中设置一个 key-val

    ```
    set luange golang
    
    ```
    
    - 在 6381 6382 6383 中可以获取key language的 val
    
    - 尝试在slave中设置一个值试试会发生什么❓
    
```
127.0.0.1:6383> set age 24
(error) READONLY You can't write against a read only slave.
```

- 既然是集群辣么多节点如果如果有一个节点 挂掉了肿么办？容灾处理

    - 当 master 机器出现故障时（模拟时杀掉redis master服务进程），需要手动将Slave中的一个提升为Master, 剩下的 slave 配置到新的Master上（冷处理
