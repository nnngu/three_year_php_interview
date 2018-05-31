## 查看网站有多少个 ip 访问

```shell
awk '{print $1}' access.log | sort | uniq | wc -l
```

相关文章：[shell在手分析服务器日志不愁?](https://segmentfault.com/a/1190000009745139)

