<?php

function divide(float $a, float $b): ?float {
    if ($b === 0.0){
        echo "Ошибка деления на ноль";
        return null;
    }
    else{
        return $a / $b;
    }
}

echo divide(1,0);

?>
