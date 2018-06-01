<?php


/** PHP 解决多进程同时写一个文件的问题
 * 解决方法：加锁
 * @param $str
 */
function write($str)
{
    $fp = fopen($file, 'a');
    do {
        usleep(100);
    } while (!flock($fp, LOCK_EX));
    fwrite($fp, $str . PHP_EOL);
    flock($fp, LOCK_UN);
    fclose($fp);
}