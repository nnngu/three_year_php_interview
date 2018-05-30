<?php
/**
 * Created by PhpStorm.
 * Author: nnngu
 * Date: 31/05/2018
 * Time: 07:41
 */


/** 约瑟夫环问题
 * 相关题目：一群猴子排成一圈，按1,2,…,n依次编号。然后从第1只开始数，数到第m只,把它踢出圈，从它后面再开始数， 再数到第m只，在把它踢出去…，如此不停的进行下去， 直到最后只剩下一只猴子为止，那只猴子就叫做大王。要求编程模拟此过程，输入m、n, 输出最后那个大王的编号
 * @param $n
 * @param $m
 * @return
 */
function get_king_monkey($n, $m)
{
    $arr = range(1, $n);

    $i = 0;

    while (count($arr) > 1) {
        $i++;
        $temp = array_shift($arr);

        if ($i % $m != 0) {
            array_push($arr, $temp);
        }
    }

    return $arr[0];
}


// ------- 测试 start --------
$res = get_king_monkey(10, 3);
echo $res;
// ------- 测试 end --------