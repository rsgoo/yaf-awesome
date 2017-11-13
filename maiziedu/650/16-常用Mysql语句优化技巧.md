##### 1：定期优化表

- optimize table tableName

- 对MYISAM，BDB，InnoDB有效

- 合并表空间碎片，消除空间浪费

##### 2：常用优化

- 对查询进行优化，应该尽量避免全表扫描，首先应该考虑在where 及 order by 涉及到的列上建立索引

- 应该尽量避免在where 字句中使用 `!=` `<>`操作符，否则创建的索引将无法生效

- 应该尽量避免在where 字句中使用 or 来连接条件，否则创建的索引将无法生效

- 乱用 % 可能会导致全表扫描

    - 全文索引 查询 SQL

	> desc select title,language_id from file where match(全文索引字段名) against("查询的字符")

- 应该尽量避免在where 字句中对字段进行 **表达式操作**，这将导致引擎放弃使用索引而进行全表扫描

	> desc select id,name from tableName where year/2=2009;   #避免

	> desc select id,name from tableName where year=2018;

- 应该尽量避免在where 字句中对字段进行 **函数操作**，这将导致引擎放弃使用索引而进行全表扫描

- 查询时避免使用 select * 操作

- 优化嵌套查询，子查询可能需要在内存中建立临时表，而关联查询不用建立临时表

- 组合索引或是符合索引中，最左索引项目原则

- 当索引列有大量数据重复时，SQL查询可能不会使用索引
