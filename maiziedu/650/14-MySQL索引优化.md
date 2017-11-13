##### 1：索引的存储分类

- B-Tree索引：**最常用** 的索引类型，大部分都支持；

- HASH索引：只有 Memory 引擎支持，使用场景简单；

- R-Tree索引：是 MyISAM的一个特殊类型的索引，主要用于地理空间数据类型

- Full-Text索引：全文索引，MyISAM的一个特殊类型的索引,InnoDB从5.6后开始支持

[MySQL索引](http://www.runoob.com/mysql/mysql-index.html)


##### 2：索引查看

- select index from tableName;

```sql
	Table: artist
	Non_unique: 0
	Key_name: PRIMARY
	Seq_in_index: 1
	Column_name: id
	Collation: A
	Cardinality: 932
	Sub_part: NULL
	Packed: NULL
	Null:
	Index_type: BTREE
	Comment:
	Index_comment:
```

- show keys from tableName;


##### 3：MySQL中使用索引的情况

- 匹配全值

	> select * from artist where aliasname='inscode' and password='110100';

- 匹配值范围查询

	> select * from artist where id>9998';

- 匹配最左范围查询

- 仅对索引进行查询

- 匹配列前缀

    > alter table tableName add INDEX idx_name(artistName(10));

	> select artistName,password from tableName where artistName like 'dadad%';  #会调用前缀索引

- 部分精确 + 部分范围

##### 4：MySQL中 *不使用* 索引的情况

- 以 % 开始的 like 查询

- 数据类型出现隐式转换

- 符合索引查询条件 **不包含最左部分**

- 使用索引比全表扫描慢

- 使用 or 分割开的条件查询

##### 5：索引使用情况

    > show status like 'handler_read%';
