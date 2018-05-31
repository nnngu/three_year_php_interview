## HTTP中GET与POST的区别？（注意最后一条）

1. GET在浏览器回退时是无害的，而POST会再次提交请求。
2. GET产生的URL地址可以被Bookmark，而POST不可以。
3. GET请求会被浏览器主动cache，而POST不会，除非手动设置。
4. GET请求只能进行url编码，而POST支持多种编码方式。
5. GET请求参数会被完整保留在浏览器历史记录里，而POST中的参数不会被保留。
6. GET请求在URL中传送的参数是有长度限制的，而POST没有。
7. GET比POST更不安全，因为参数直接暴露在URL上，所以不能用来传递敏感信息。
8. GET参数通过URL传递，POST放在Request body中。
9. GET产生一个TCP数据包，POST产生两个TCP数据包。