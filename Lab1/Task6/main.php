<?php

$numbers = [1, 2, 3, 4, 5];

$a = array_map(fn($n) => $n ** 2, $numbers); 
$b = fn($x) => ($x % 2 == 0 ? "Четное":"Нечетное");

echo $b(2);

?>
