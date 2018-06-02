## 写一个正则表达式，过滤 JS 脚本（把 script 标签及其内容都去掉）

```php
$text = '<script>alert('XSS')</script>';
$pattern = '<script.*>.*<\/script>/i';  // 后面的 /i 为忽略大小写
$text = preg_replace($pattern, '', $text);
```
