<?php
/**
 * Created by PhpStorm.
 * User: 雨醉风尘
 * Date: 2017/10/23
 * Time: 23:30
 * content：抽象类
 */

abstract class ShopProductWriter
{
    protected $products = [];

    public function addProduct(ShopProduct $shopProduct)
    {
        $this->products[] = $shopProduct;
    }

    #抽象方法中不能有具体内容、
    abstract public function write();

}

class XmlProductWriter extends ShopProductWriter
{
    public function write()
    {
        return 'hello,world';
    }
}


$prodoct1 = new XmlProductWriter();
echo $prodoct1->write();
