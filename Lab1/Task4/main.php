<?php

function grade(int $score): string{
    return match (true) {
    $score >= 90 => 'A',
    $score >= 75 => 'B',
    $score >= 60 => 'C',
    default => 'F',
};
}

echo '<pre>';
echo grade(95);
echo "\n";
echo grade(75);
echo "\n";
echo grade(50);
echo '</pre>';

?>
