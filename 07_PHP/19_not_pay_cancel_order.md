## 下单后30分钟未支付取消订单

- 第一种方案：被动过期+cron，就是用户查看的时候去数据库查有没有支付+定时清理。

- 第二种方案：延迟性任务，到时间检查订单是否支付成功，如果没有支付则取消订单

