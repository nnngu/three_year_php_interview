<?php
/**
 * Created by PhpStorm.
 * Author: nnngu
 * Date: 31/05/2018
 * Time: 07:02
 */


/** 求n以内的质数
 * 质数筛选定理：1、n不能够被不大于根号n的任何质数整除，则n是一个质数
 * 2、除了2的偶数都不是质数
 * @param $n
 * @return array
 */
function prime_number($n)
{
    $prime = array(2); // 2为质数

    for ($i = 3; $i <= $n; $i += 2) { // 偶数不是质数，步长可以加大
        $sqrt = intval(sqrt($i)); // 求根号n

        for ($j = 3; $j <= $sqrt; $j += 2) { // i是奇数，当然不能被偶数整除，步长也可以加大。
            if ($i % $j == 0) {
                break;
            }
        }

        if ($j > $sqrt) {
            array_push($prime, $i);
        }
    }

    return $prime;
}


// ------- 测试 start --------
$res = prime_number(100);
print_r(json_encode($res));
// ------- 测试 end --------