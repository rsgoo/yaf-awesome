<?php

/**
 * @ 对象基础
 * @ 2017-10-18
 */
class ShopProduct
{
	public $title			  = "深入PHP：面向对象、模式与实践";
	public $producerMainName  = "Matt Zandstra ";
	public $producerFisrtName = "陈浩";
	public $price 			  = "54.50";
}

$product1 = new ShopProduct();
$product2 = new ShopProduct();

#因为类中 title 属性为 pubic,所以可以赋新值取代旧值
$product1->title = "Learning PHP设计模式";
$product2->title = "鸟哥的Linux私房菜";

#PHP 没有强制所有的属性都要在类中定义，所有可以动态添加属性到对象
#但这不是一种好的编程习惯
$product1->category = "PHP";
$product2->category = "Linux";


?>
