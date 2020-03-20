<?php

namespace p7;

// 整数反转
class Solution
{

    /**
     * function 1
     * @param Integer $x
     * @return Integer
     */
    public function reverse($x)
    {
        if (!is_int($x)) return 0;
        $res = 0;
        while ($x != 0) {
            $remainder = $x % 10;
            $x = ($x - $remainder) / 10;
            $res = $res * 10 + $remainder;
        }
        if ($res > pow(2, 31) - 1 || $res < pow(-2, 31)) return 0;
        return $res;
    }

    public function reverse2($x){
        if (!is_int($x)) return 0;
        if ($x<0 ) {
            $res = -strrev($x);
        }else {
            $res = abs(strrev($x));
        }
        if ($res > pow(2, 31) - 1 || $res < pow(-2, 31)) return 0;
        return $res;
    }
}


echo ((new Solution())->reverse2(321));
