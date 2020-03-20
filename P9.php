<?php
namespace p9;

// 回文数
class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        // 反转比较
        return strrev($x) == $x ? true:false;
    }
}
echo (new Solution())->isPalindrome(121);