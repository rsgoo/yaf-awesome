- 1：`静态方法`不能访问这个这个类中的`普通属性`，但可以访问静态属性,因为普通属性属于对象；


- 2：因为是通过类而不是对象实例访问`静态元素`，所以访问静态元素时不需要引用对象的变量，而是使用 `::` 来连接类名和静态属性或是类名和静态方法；


- 3：使用 `self` 关键字类访问 `当前类` 中的静态属性或静态方法；


- 4：静态属性和静态方法又被称为类变量和类方法，因此不能在静态方法中使用伪变量 `$this`；


- 5：类常量只包含基本的数据类型，和类属性一样，只能通过类而不能通过 **类的实例** 访问类常量；


- 6：抽象类不能被实例化，抽象类只是定义子类需要的方法，子类可以继承他并且通过实现抽象类中的抽象方法，使抽象类具体化；


- 7：抽象类至少包含一个抽象方法，抽象方法使用 `abstract` 关键字声明，抽象方法中不能有具体内容；创建抽象方法后，要确认所有子类都实现了改方法。

	```PhpStorm
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

	```
