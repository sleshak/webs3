<?php
    class MathUtils {
        public static function square(float $x): float {
            return $x * $x;
        }
    };

    $a = 4;
    $res = MathUtils::square($a);
    echo "Квадрат числа {$a}: {$res}";

    $b = 4.1;
    $res = MathUtils::square($b);
    echo "Квадрат числа {$b}: {$res}";
?>