## 查看网站有多少个 ip 访问

```$xslt
awk '{print $1}' access.log | sort | uniq | wc -l
```