<?php

namespace p13;

// 罗马数字转整数
class Solution
{

    /**
     * @param String $s
     * @return Integer
     */
    public function romanToInt($s)
    {
        /*
         字符  数值
          I     1
          V     5
          X     10
          L     50
          C     100
          D     500
          M     1000
         */
        $str = ['CM', 'CD', 'XC', 'XL', 'IX', 'IV', 'M', 'D', 'C', 'L', 'X', 'V', 'I'];
        $value = [900, 400, 90, 40, 9, 4, 1000, 500, 100, 50, 10, 5, 1];
        $int = 0;
        for ($i = 0; $i < count($value) && strlen($s) > 0; $i++) {
            // 合并
            $int += substr_count($s, $str[$i]) * $value[$i];
            //  替换
            $s = str_replace($str[$i], "", $s);
        }
        return $int;
    }
}

echo (new Solution())->romanToInt('IV');
