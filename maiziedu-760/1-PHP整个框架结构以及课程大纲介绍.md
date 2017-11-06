#####  [原文：PHP整个框架结构以及课程大纲介绍](http://www.maiziedu.com/course/760-10995/)

**1：PHP设计理念及特点**

- PHP 相比与其他动态脚本语言，概括起来是`快`，`糙`，`猛`；

- PHP 是一门 `弱类型` 语言。一个变量类型并不是一开始就确定不变，在程序允许在才能确定变量的类型并且可能发生显示转换或隐式转换；

- Zend引擎 + 组件（*EXT*） 模式降低了内部耦合，中间层（SAPI）隔绝 webServer 和 PHP；

- 语法简单，风格混杂。

**2：PHP 核心架构**

- 上层脚本应用（Application）

	- 平常编写的 PHP 程序，通过调用不同的 `SAPI` 方式得到不同的应用模式。*例如通过 `WebServer` 实现 `Web` 应用，通过 `命令行` 实现在 terminal中运行*

- SAPI 层

	- 全称 Server Application Programming Interface，服务端应用编程接口，SAPI 通过一系列函数，使得 PHP 可以和外部进行数据交互。通过 SAPI 成功的将 PHP 本身和上层应用解耦隔离，然后通过一系列接口，使得外部应用可以和 PHP 交换数据并根据不同应用的特点实现特点的处理方法。

- PHP 扩展层

	- mysqli，redis， GD库，array()

- Zend 引擎

	- C 语言实现，Zend 引擎将 PHP 代码翻译（语法解析等过程）为可执行的 opcode，实现基本能的数据结构（`hashtable`，`oo`），内存分配及管理，提供相应的 API 方法供外部调用。

	![PHP核心架构示意图](http://oxkadystp.bkt.clouddn.com/PHP%E6%A0%B8%E5%BF%83%E6%9E%B6%E6%9E%84.png)
