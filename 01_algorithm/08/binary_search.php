<?php
/**
 * Created by PhpStorm.
 * Author: nnngu
 * Date: 31/05/2018
 * Time: 18:00
 */

/** 二分查找
 * 在有序（升序）的数组中找到一个数的位置
 * @param $arr
 * @param $value
 * @return int
 */
function binary_search($arr, $value)
{
    $left = 0;
    $right = count($arr) - 1;

    while ($left <= $right) {
        $middle = intval(($left + $right) / 2);
        if ($value < $arr[$middle]) {
            $right = $middle - 1;
        } elseif ($value > $arr[$middle]) {
            $left = $middle + 1;
        } else {
            return $middle;
        }
    }

    return -1;
}


// ------- 测试 start --------
$arr = [0, 11, 22, 33, 44, 55, 66, 77, 88, 99, 100]; // 升序的数组
$res = binary_search($arr, 22);
echo $res;
// ------- 测试 end --------