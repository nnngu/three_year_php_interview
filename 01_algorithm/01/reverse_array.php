<?php
/**
 * Created by PhpStorm.
 * Author: nnngu
 * Date: 30/05/2018
 * Time: 18:59
 */


/** 反转一个数组
 * @param $arr
 * @return mixed
 */
function reverse_array($arr)
{
    $n = count($arr);

    $left = 0;
    $right = $n - 1;

    while ($left < $right) {
        $temp = $arr[$left];
        $arr[$left++] = $arr[$right];
        $arr[$right--] = $temp;
    }

    return $arr;
}

// ------- 测试 start --------
$arr = [11,22,33,44,55,66,77];
print_r(json_encode($arr));
echo "<br>";
$res = reverse_array($arr);
print_r(json_encode($res));
// ------- 测试 end --------

