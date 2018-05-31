## fastcgi 通过端口监听和通过文件监听的区别

监听方式|形式|ngnix 连接 fastcgi 方式
:-:|:-:|:-:
端口监听|fastcgi_pass 127.0.0.1:9000|TCP 连接
文件监听|fastcgi_pass/tmp/php_cgi.sock|Unix domain Socket

