<?php
/**
 * Created by PhpStorm.
 * Author: nnngu
 * Date: 30/05/2018
 * Time: 20:25
 */

/** 将一个数组中的元素打乱（随机）
 * @param $arr
 * @return mixed
 */
function custom_shuffle($arr)
{
    $n = count($arr);
    for ($i = 0; $i < $n; $i++) {
        $rand_pos = mt_rand(0, $n - 1);
        if ($rand_pos != $i) {
            $temp = $arr[$i];
            $arr[$i] = $arr[$rand_pos];
            $arr[$rand_pos] = $temp;
        }
    }

    return $arr;
}


// ------- 测试 start --------
$arr = [1, 2, 3, 4, 5, 6, 7, 8];
$res = custom_shuffle($arr);
print_r(json_encode($res));
// ------- 测试 end --------