<?php
/**
 * @param $array
 *
 * 1、依次比较两个相邻元素大小大的往后排
 * 2、每个元素执行一遍这个流程
 * 3,2,1,9,4
 *
 *
 * 第一次遍历
 * i=0,j=1
 * 3,2比较, 3大于2换位
 * 2,3,1,9,4
 *
 * i=0,j=2
 * 2,1比较，2大于1换位
 * 1,3,2,9,4
 *
 * i=0,j=3
 * .....
 *
 *
 *
 *
 *
 */
function bsort($array)
{
    for ($i=0; $i<count($array); $i++) {
        for ($j=$i+1; $j<count($array); $j++) {
            if ($array[$i]>$array[$j]) {
                $tmp = $array[$j];
                $array[$j] = $array[$i];
                $array[$i] = $tmp;
            }
        }
    }

    return $array;
}

print_r(bsort([3,2,1,9,4]));
print_r(bsort([0,0,0,0]));
print_r(bsort([1,1,9,3]));
print_r(bsort([]));