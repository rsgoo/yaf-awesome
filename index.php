<?php

/* 定义这个常量是为了在application.ini中引用*/
define('APPLICATION_PATH', dirname(__FILE__));

// 自定义数组配置
/*
$config = array(
    "application" => array(
        "directory" => realpath(dirname(__FILE__)) . "/application",
    ),
);
$application = new Yaf_Application($config);
*/

// 默认 ini 文件配置模式
$application = new Yaf_Application(APPLICATION_PATH . "/conf/application.ini");

$application->bootstrap()->run();

//$application->execute("main", $argc, $argv);
//通常用于在cron任务中运行Yaf_Application。 在cron任务中也可以使用autoloader和Bootstrap机制。

