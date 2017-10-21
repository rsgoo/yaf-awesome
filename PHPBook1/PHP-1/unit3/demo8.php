<?php

/**
 * @ 面向对象值继承
 * @ 2017-10-21
 * @ 1:在子类中定义构造方法时，需要传递参数给父类的构造方法。
 *
 */

#基类
class ShopProduct
{
	#属性，
	public $title;
	public $producerMainName;
	public $producerFisrtName;
	public $price;

	#构造方法
	public function __construct($title, $firstName, $mainName, $price)
	{
		$this->title 			 = $title;
		$this->producerMainName  = $mainName;
		$this->producerFirstName = $firstName;
		$this->price 			 = $price;
	}

	#获取作者信息
	public function getProducer()
	{
		return $this->producerMainName . ":" . $this->producerFirstName;
	}

	#获取对象概要信息
	public function getSummaryLine()
	{
		$base = $this->title.'('.$this->producerMainName.' '.$this->producerFirstName.')';
		return $base;
	}

}

#类 CdProduct 继承父类
class CdProduct extends ShopProduct
{
	public $playLength;

	public function __construct($title, $firstName, $mainName, $price, $playLength)
    {
		parent::__construct($title, $firstName, $mainName, $price);

		$this->playLength = $playLength;
    }

    public function getPlayLength()
	{
		return $this->playLength;
	}

	public function getSummaryLine()
	{
        $base = $this->title.'('.$this->producerMainName.' '.$this->producerFirstName.')';
        $base.= ': Playing time - '.$this->playLength;
        return $base;
	}
}

#类 BookProduct 继承父类
class BookProduct extends ShopProduct
{
    public $numPages;

    public function __construct($title, $firstName, $mainName, $price, $numPages)
    {
        parent::__construct($title, $firstName, $mainName, $numPages);

        $this->numPages = $numPages;
    }

    public function getNumberOfPages()
    {
        return $this->numPages;
    }

    public function getSummaryLine()
    {
        $base = $this->title.'('.$this->producerMainName.' '.$this->producerFirstName.')';
        $base.= ': page count - '.$this->numPages;
        return $base;
    }
}

$title_1 	 = '《完美世界》';
$firstName_1 = '生命狂想曲';
$mainName_1  = '水木年华';
$price_1 	 = '10.24';
$playLength_1= '14:40';

$title_2 	 = '《深入PHP：面向对象、模式与实践（第3版）》';
$firstName_2 = 'Matt Zandstra';
$mainName_2  = '陈浩';
$price_2 	 = '54.50';
$numPages_2  = 450;

$product1 = new CdProduct($title_1, $firstName_1, $mainName_1, $price_1, $playLength_1);
$product2 = new BookProduct($title_2, $firstName_2, $mainName_2, $price_2, $numPages_2);

echo $product1->getProducer();
echo '<br/>';
echo $product1->getSummaryLine();
echo '<hr/>';

echo $product2->getProducer();
echo '<br/>';
echo $product2->getSummaryLine();



?>
