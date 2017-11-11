<?php

/**
 * @ 面向对象值继承
 * @ 2017-10-21
 * @ 1:子类默认继承父类 public 和 protected 方法
 */

#基类
class ShopProduct
{
	#属性，
	public $numPages;
	public $playLength;
	public $title;
	public $producerMainName;
	public $producerFisrtName;
	public $price;

	#构造方法
	public function __construct($title, $firstName, $mainName, $price, $numPages=0, $playLength=0)
	{
		$this->title 			 = $title;
		$this->producerMainName  = $mainName;
		$this->producerFirstName = $firstName;
		$this->price 			 = $price;
		$this->numPages 		 = $numPages;
		$this->playLength 		 = $playLength;
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
$numPages_1  = 0;
$playLength_1= '04:40';

$product1 = new CdProduct($title_1, $firstName_1, $mainName_1, $price_1, $numPages_1, $playLength_1);

echo $product1->getProducer();

echo '<hr/>';

echo $product1->getSummaryLine();



?>
