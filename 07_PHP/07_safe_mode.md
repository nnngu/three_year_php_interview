## 打开 php.ini 的 safe_mode 会有哪些影响

当safe_mode=On时，会出现下面限制：

1. 所有输入输出函数（例如fopen()、file()和require()）的适用会受到限制，只能用于与调用这些函数的脚本有相同拥有者的文件。例如，假定启用了安全模式，如果Mary拥有的脚本调用fopen(),尝试打开由Jonhn拥有的一个文件，则将失败。但是，如果Mary不仅拥有调用 fopen()的脚本，还拥有fopen()所调用的文件，就会成功。
2. 如果试图通过函数popen()、system()或exec()等执行脚本，只有当脚本位于safe_mode_exec_dir配置指令指定的目录才可能。
3. HTTP验证得到进一步加强，因为验证脚本用于者的UID划入验证领域范围内。此外，当启用安全模式时，不会设置PHP_AUTH。
4. 如果适用MySQL数据库服务器，链接MySQL服务器所用的用户名必须与调用mysql_connect()的文件拥有者用户名相同。

详细的解释可以查看官网：[safe_mode 安全模式](http://www.php.net/manual/zh/ini.sect.safe-mode.php)

## php save_mode 影响的函数

函数名|限制
-|-
dbmopen()|检查被操作的文件或目录是否与正在执行的脚本有相同的 UID（所有者）。
dbase_open()|检查被操作的文件或目录是否与正在执行的脚本有相同的 UID（所有者）。
filepro()|检查被操作的文件或目录是否与正在执行的脚本有相同的 UID（所有者）。
filepro_rowcount()|检查被操作的文件或目录是否与正在执行的脚本有相同的 UID（所有者）。
filepro_retrieve()|检查被操作的文件或目录是否与正在执行的脚本有相同的 UID（所有者）。