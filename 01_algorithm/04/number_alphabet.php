<?php
/**
 * Created by PhpStorm.
 * Author: nnngu
 * Date: 30/05/2018
 * Time: 23:40
 */


/** 给一个有数字和字母的字符串，让连着的数字和字母对应
 * @param $str
 */
function number_alphabet($str)
{
    $number = preg_split('/[a-z]+/', $str, -1, PREG_SPLIT_NO_EMPTY);
    $alphabet = preg_split('/\d+/', $str, -1, PREG_SPLIT_NO_EMPTY);
    $n = count($number);
    for ($i = 0; $i < $n; $i++) {
        echo $number[$i] . ':' . $alphabet[$i] . "<br>";
    }
}


// ------- 测试 start --------
$str = '1a3bb44a2ac11hjkpp';
number_alphabet($str);
// ------- 测试 end --------
