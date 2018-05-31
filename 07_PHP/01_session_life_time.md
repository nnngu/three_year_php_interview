## Session可不可以设置失效时间，比如30分钟过期

1. 设置seesion.cookie_lifetime有30分钟，并设置session.gc_maxlifetime为30分钟
2. 自己为每一个Session值增加timestamp
3. 每次访问之前, 判断时间戳



