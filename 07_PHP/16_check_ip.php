<?php
/**
 * Created by PhpStorm.
 * Author: nnngu
 * Date: 02/06/2018
 * Time: 08:40
 */


/** 验证 ip 是否正确
 * @param $ip
 * @return bool
 */
function check_ip($ip)
{
    if (!filter_var($ip, FILTER_VALIDATE_IP)) {
        return false;
    } else {
        return true;
    }
}


// ------ 测试 start --------
$res = check_ip('192.168.1.1');
var_dump($res);
// ------ 测试 end --------