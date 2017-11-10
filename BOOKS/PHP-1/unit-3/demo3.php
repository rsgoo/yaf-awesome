<?php

/**
 * @ 对象基础
 * @ 2017-10-21
 */
class ShopProduct
{
	#属性
	public $title			  = "深入PHP：面向对象、模式与实践";
	public $producerMainName  = "Matt Zandstra ";
	public $producerFisrtName = "陈浩";
	public $price 			  = "54.50";

	#方法
	public function getProducer()
	{
		return $this->producerMainName . ":" . $this->producerFisrtName;
	}
}

$product1 = new ShopProduct();
$product1->title = 'Go语言程序设计';
$product1->producerMainName = 'Mark Summerfield';
$product1->producerFisrtName = '许式伟';
$product1->price = '53.80';

echo $product1->getProducer();

?>
