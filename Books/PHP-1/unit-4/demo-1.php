<?php
/**
 * Created by PhpStorm.
 * User: 雨醉风尘
 * Date: 2017/10/23
 * Time: 22:43
 */

class StaticsExample
{
    const LANGUAGE = "PHP";
    public $name = "inscode";
    public static $number = 11019;
    public static function sayHello()
    {
        echo '静态方法直接调用无需实例化<br/>';
        echo self::$number;
    }
}

echo StaticsExample::$number;

echo '<br/>';

StaticsExample::sayHello();

echo '<hr/>';
print_r(StaticsExample::LANGUAGE);