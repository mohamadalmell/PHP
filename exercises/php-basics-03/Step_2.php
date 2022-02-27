<?php
function factorial($n){
    $x = 1;
    $fact = 1;
    while ($x <= $n) {
        $fact *= $x;
        $x++;
    }
    return $fact;
}

print factorial(6);
?>
