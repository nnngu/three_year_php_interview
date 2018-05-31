## 最左前缀原则

有一个复合索引：
```sql
INDEX(`a`, `b`, `c`)
```

使用方式|能否用上索引
:-:|:-:
`select * from users where a=1 and b=2`|能用上a、b
`select * from users where b=2 and a=1`|能用上a、b（有MySQL查询优化器）
`select * from users where a=2 and c=1`|能用上 a
`select * from users where b=2 and c=1`|不能

