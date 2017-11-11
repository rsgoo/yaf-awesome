<?php

/**
 * @ 面向对象构造方法
 * @ 2017-10-21
 * @ 1:可以将对象作为一个参数传递给另一个对象使用
 * @ 2:类型提示不能用于基本的数据类型,数组除外
 */
class ShopProduct
{
	#属性，
	public $title;
	public $producerMainName;
	public $producerFisrtName;
	public $price;

	public function __construct($title, $firstName, $mainName, $price)
	{
		$this->title = $title;
		$this->producerMainName = $mainName;
		$this->producerFirstName = $firstName;
		$this->price = $price;
	}

	public function getProducer()
	{
		return $this->producerMainName . ":" . $this->producerFirstName;
	}
}

class ShopProductWriter{

	#类型提示，必须是调用调用的ShopProduct类
	public function write(ShopProduct $shopProduct)
	{
		$title = $shopProduct->title;
		$price = $shopProduct->price;
		return $title .'的售价是'.$price;
	}

}

$title 	   = 'Go并发编程实战（第2版）';
$firstName = '郝林';
$mainName  = 'Haoling';
$price 	   = '61.40';
#实例化的参数都将被传递构造方法
$product1 = new ShopProduct($title, $firstName, $mainName, $price);

$writer = new ShopProductWriter();
echo $writer->write($product1);

?>
