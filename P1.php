<?php
namespace p1;

// 两数之和 简单
class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target)
    {
        $len = count($nums);
        for ($i = 0; $i < $len; $i++) {
            for ($j = $i + 1; $j < $len; $j++) {
                if ($nums[$i] + $nums[$j] == $target) {
                    return [$i, $j];
                }
            }
        }
    }
}

//print_r((new Solution())->twoSum([1, 2, 3, 4], 4));

/**
 *  思路:
 *  使用 for 循环 nums 的长度 再嵌套一个循环 自增 = 上一个for循环i+1当作下标取值 进行比较 返回 [i,j]
 *
 */
//$nums =[5,2,3,4,6];
//for ($i = 0;$i <count($nums) ;$i++) {
//    for ($j = $i + 1; $j < count($nums) ;$j++){
//        if ($nums[$j] + $nums[$i] == 5) {
//            print_r([$i,$j]);
//        }
//    }
//}

