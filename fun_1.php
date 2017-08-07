<?php

/**
 * 生成不重复的随机数
 * @param  integer $start  需要生成的数字开始范围
 * @param  integer $end    结束范围
 * @param  integer $length 需要生成的随机数个数
 * @return array          生成的随机数
 */
function get_rand_number($start=1, $end=10, $length=4)
{
    $connt = 0;
    $temp = array();
    while ($connt<$length) {
        $temp[] = rand($start, $end);
        $data = array_unique($temp);
        $connt = count($data);
    }
    sort($data);
    return $data;
}

/**
 * 将字符串分隔为数组
 * @param  string $str 字符串
 * @return array      分隔得到的数组
 */
function mb_str_split($str)
{
    return preg_split('/(?<!^)(?!$)/u', $str);
}

// 验证emil
filter_var($email,FILTER_VALIDATE_EMAIL);
// 验证url
filter_var($url,FILTER_VALIDATE_URL);



























//
