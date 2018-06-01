## $_SERVER['SERVER_NAME'] 和 $_SERVER['HTTP_HOST'] 的区别

相同点： 当满足以下三个条件时，两者会输出相同信息。

1. 服务器为80端口
2. apache的conf中ServerName设置正确
3. HTTP/1.1协议规范

不同点：

1. 通常情况： $_SERVER["HTTP_HOST"] 在HTTP/1.1协议规范下，会根据客户端的HTTP请求输出信息。 $_SERVER["SERVER_NAME"] 默认情况下直接输出apache的配置文件httpd.conf中的ServerName值。
2. 当服务器为非80端口时： $_SERVER["HTTP_HOST"] 会输出端口号，例如：`nnngu.com:8080` $_SERVER["SERVER_NAME"] 会直接输出ServerName值， 因此在这种情况下，可以理解为：$_SERVER['HTTP_HOST'] = $_SERVER['SERVER_NAME'] : $_SERVER['SERVER_PORT']
3. 当配置文件httpd.conf中的ServerName与HTTP/1.0请求的域名不一致时： httpd.conf配置如下：

```apacheconfig
<virtualhost *>    
ServerName nnngu.com    
ServerAlias blog.nnngu.com    
</virtualhost>
```

客户端访问域名 `blog.nnngu.com` $_SERVER["HTTP_HOST"] 输出 `blog.nnngu.com` $_SERVER["SERVER_NAME"] 输出 `nnngu.com`

