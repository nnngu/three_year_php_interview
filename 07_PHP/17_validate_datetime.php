<?php
/**
 * Created by PhpStorm.
 * Author: nnngu
 * Date: 02/06/2018
 * Time: 08:46
 */

/** 验证日期是否合理
 * @param $datetime
 * @return bool
 */
function check_datetime($datetime)
{
    if (date('Y-m-d H:i:s', strtotime($datetime)) === $datetime) {
        return true;
    } else {
        return false;
    }
}


// ------ 测试 start --------
$res = check_datetime('2011-05-10 10:33:01');
var_dump($res);
// ------ 测试 end --------