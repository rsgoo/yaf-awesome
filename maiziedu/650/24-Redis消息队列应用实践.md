```php
<?php

$redis = new Redis();

$conn = $redis->connect("127.0.0.1","6379");

if (!$conn) {
    echo '<pre>';
    print_r($redis->getLastError());
}

$redis->zAdd("order_queue",time(),11111);
$redis->zAdd("order_queue",time(),11112);
$redis->zAdd("order_queue",time(),11113);
$redis->zAdd("order_queue",time(),11114);
$redis->zAdd("order_queue",time(),11115);

$arr = $redis->zRange("order_queue",0,$redis->zCard("order_queue"));

echo '<pre>';
print_r($arr);

```
