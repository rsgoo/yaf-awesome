<?php

/**
 *
 */
interface Chargeable
{
	public function getPrice();
}

class ShopProduct implements Chargeable
{
    public $price = 64.50;
    public $discount = 0.2;

    public function getPrice()
    {
        return $this->price ." : ".$this->discount;
    }
}

$product1 = new ShopProduct();
echo $product1->getPrice();


?>
