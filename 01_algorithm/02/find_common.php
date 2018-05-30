<?php
/**
 * Created by PhpStorm.
 * Author: nnngu
 * Date: 30/05/2018
 * Time: 19:22
 */


/** 找出两个有序数组里相同的元素
 * @param $arr1
 * @param $arr2
 * @return array
 */
function find_common($arr1, $arr2)
{
    $common = array();
    $i = 0;
    $j = 0;
    $count1 = count($arr1);
    $count2 = count($arr2);
    while ($i < $count1 && $j < $count2) {
        if ($arr1[$i] < $arr2[$j]) {
            $i++;
        } elseif ($arr1[$i] > $arr2[$j]) {
            $j++;
        } else {
            $common[] = $arr1[$i];
            $i++;
            $j++;
        }
    }

    return array_unique($common);
}


// ------- 测试 start --------
$arr1 = array(1,2,3,4,5,5,6,7,8);
$arr2 = array(1,3,3,5,5,5,6,6,9);
$res = find_common($arr1, $arr2);
print_r(json_encode($res));
// ------- 测试 end --------
