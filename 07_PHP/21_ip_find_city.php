<?php
/**
 * Created by PhpStorm.
 * Author: nnngu
 * Date: 02/06/2018
 * Time: 10:29
 */


// 请设计一个实现方式，可以给某个ip找到对应的省和市，要求效率尽可能的高

$redis_key = 'ip';
$redis = new Redis();
$redis->zAdd($redis_key, 20, '#bj');// 北京的最小IP加#
$redis->zAdd($redis_key, 30, 'bj');// 最大IP

function get_ip_city($ip_address)
{
    $ip = ip2long($ip_address);

    $redis_key = 'ip';
    $city = zRangeByScore($redis_key, $ip, '+inf', array('limit' => array(0, 1)));
    if ($city) {
        if (strpos($city[0], "#") === 0) {
            echo '城市不存在!';
        } else {
            echo '城市是' . $city[0];
        }
    } else {
        echo '城市不存在!';
    }
}