<?php
/**
 * Created by PhpStorm.
 * Author: nnngu
 * Date: 31/05/2018
 * Time: 12:36
 */


/**
 * 如何快速寻找一个数组里最小的1000个数
 * 思路：假设最前面的1000个数为最小的，算出这1000个数中最大的数，然后和第1001个数比较，如果这个最大的数比第1001个数小的话跳过，如果这个最大的数比第1001个数大则将两个数交换位置，并算出新的1000个数里面的最大数，再和下一个数比较，以此类推。
 * @param $arr
 * @param $k  获取最小的k个数
 * @return array
 */
function get_min_array($arr, $k)
{
    $n = count($arr);

    $min_array = array();

    for ($i = 0; $i < $n; $i++) {
        if ($i < $k) {
            $min_array[$i] = $arr[$i];
        } else {
            if ($i == $k) {
                $max_pos = get_max_pos($min_array);
                $max = $min_array[$max_pos];
            }

            if ($arr[$i] < $max) {
                $min_array[$max_pos] = $arr[$i];

                $max_pos = get_max_pos($min_array);
                $max = $min_array[$max_pos];
            }
        }
    }

    return $min_array;
}

/** 获取最大的位置
 * @param $arr
 * @return int
 */
function get_max_pos($arr)
{
    $pos = 0;
    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] > $arr[$pos]) {
            $pos = $i;
        }
    }

    return $pos;
}


// ------- 测试 start --------
$arr = [1, 100, 20, 22, 33, 44, 55, 66, 23, 79, 18, 20, 11, 9, 129, 399, 145, 2469, 58];
$res = get_min_array($arr, 5);
print_r(json_encode($res));
// ------- 测试 end --------
