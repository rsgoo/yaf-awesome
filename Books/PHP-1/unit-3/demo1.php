<?php

/**
 * @ 对象基础
 * @ 2017-10-18
 */
class ShopProduct
{
	// public $title			  = "深入PHP：面向对象、模式与实践";
	// public $producerMainName  = "Matt Zandstra ";
	// public $producerFisrtName = "陈浩";
	// public $price 			  = "54.50";
}

$product1 = new ShopProduct();
$product2 = new ShopProduct();

var_dump($product1);    //outout:object(ShopProduct)#1 (0) { }		# 1是对象实例的内部标识符

echo '<hr/>';

var_dump($product2);	//outout:object(ShopProduct)#1 (0) { }		# 2是对象实例的内部标识符



?>
