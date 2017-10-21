<?php

/**
 * @ 面向对象构造方法
 * @ 2017-10-21
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

$title_1 	 = 'Go并发编程实战（第2版）';
$firstName_1 = '郝林';
$mainName_1  = 'Haoling';
$price_1 	 = '61.40';

$title_2 	 = '深入PHP：面向对象、模式与实践（第3版）';
$firstName_2 = '陈浩';
$mainName_2  = 'Matt Zandstra';
$price_2 	 = '54.50';

$product1 = new ShopProduct($title_1, $firstName_1, $mainName_1, $price_1);
$product2 = new ShopProduct($title_2, $firstName_2, $mainName_2, $price_2);

echo $product1->getProducer();

echo '<br/>';

echo $product2->getProducer();


?>
