## 隐式转换

- 当查询字段是INT类型，如果查询条件为CHAR，将查询条件转换为INT，如果是字符串前导都是数字将会进行截取，如果不是转换为0。
- 当查询字段是CHAR/VARCHAR类型，如果查询条件为INT，将查询字段为换为INT再进行比较，可能会造成全表扫描