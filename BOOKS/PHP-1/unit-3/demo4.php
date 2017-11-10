<?php

/**
 * @ 面向对象构造方法
 * @ 2017-10-21
 * @ 创建对象时,构造方法会被自动调用，构造方法可以用来确保必要的参数被设置
 * @ 构造方法常用与变量的初始化
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

$title 	   = 'Go并发编程实战（第2版）';
$firstName = '郝林';
$mainName  = 'Haoling';
$price 	   = '61.40';
#实例化的参数都将被传递构造方法
$product1 = new ShopProduct($title, $firstName, $mainName, $price);

echo $product1->getProducer();

?>
