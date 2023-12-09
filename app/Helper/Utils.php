<?php

namespace App\Helper;

class Utils
{
    public static function formatHumanMoney($money, $decimals = 0, $dec_point = null, $thousands_sep = ',') 
    {
        if(is_float($money)) {
            $decimals = 2;
            $dec_point = '.';
        }
        $formatted = number_format($money, $decimals, $dec_point, $thousands_sep);

        return $formatted;
    }
}