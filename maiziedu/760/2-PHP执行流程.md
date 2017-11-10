#####  [原文：PHP 执行流程](http://www.maiziedu.com/course/760-10996/)

**强类型编程语言编译过程**

- C，C++ 将代码最终编译成 ==机器码 (二进制码)== 执行

- Java 将 `.java` 代码 编译成为 `.class (bytecode)` ，最终有 **JVM** 来执行


**PHP 解析过程**

- **Scanning**：将 PHP 代码转换成语言片段 （**Tokens**）

    > 语法分析，词法分析

- **Parsing**： 将 Tokens 转换城简单而有意义的表达式

- **Compiling**：将表达式编译成 **Opcode**

- **Execution**：Zend 顺序执行 Opcode，从而实现 PHP 功能

    > 对于Opcode，PHP脚本一结束，Opcode 就清除了

    > 使用 apc，xcache 可以实现 Opcode 缓存
