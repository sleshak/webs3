<?php
    class StringUtils {
        public static function isPalindrome(string $s): bool {
            $s = mb_strtolower(preg_replace('/\s+/', '', $s));
            return $s === strrev($s);
        }
    }
    $str="Level";
    $str2="Мадам";
    $str3="Тест";
    $str4="";  

    echo "{$str} - " . (StringUtils::isPalindrome($str) ? "Палиндром" : "Не палиндром") . "\n"; 
    echo "{$str2} - " . (StringUtils::isPalindrome($str2) ? "Палиндром" : "Не палиндром") . "\n";
    echo "{$str3} - " . (StringUtils::isPalindrome($str3) ? "Палиндром" : "Не палиндром") . "\n";
    echo "{$str4} - " . (StringUtils::isPalindrome($str4) ? "Палиндром" : "Не палиндром") . "\n";
?>