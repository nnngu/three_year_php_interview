## COOKIE 和 SESSION 的区别和关系

1. COOKIE 保存在客户端，而 SESSION 则保存在服务器端
2. 从安全性来讲，SESSION 的安全性更高
3. 从保存内容的类型的角度来讲，COOKIE 只保存字符串（及能够自动转换成字符串）
4. 从保存内容的大小来看，COOKIE 保存的内容是有限的，比较小，而 SESSION 基本上没有这个限制
5. 从性能的角度来讲，用 SESSION 的话，对服务器的压力会更大一些
6. SEEION 依赖于 COOKIE，但如果禁用 COOKIE，也可以通过 url 传递 SESSION_ID