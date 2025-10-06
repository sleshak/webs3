<?php

$num = isset($_GET['num']) ? intval($_GET['num']) : 0;

if ($num % 3 == 0) {
    echo "Fizz";
}else if ($num % 5 == 0) {
    echo "Bizz";
}else if ($num % 15 == 0){
    echo "FizzBuzz";
}else{
    echo $num;
}

?>
