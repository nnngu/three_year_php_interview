## 列出一些防范 SQL 注入、XSS 攻击、CSRF 攻击的方法

SQL 注入：
- addslashes() 函数(将'转为\\'，将"转为\\")
- mysqli_real_escape_string() 函数
- PDO::quote()

XSS：
- [htmlspecialchars 函数](http://php.net/manual/zh/function.htmlspecialchars.php)

CSRF：
- 验证 HTTP REFER
- 使用 toke 进行验证


