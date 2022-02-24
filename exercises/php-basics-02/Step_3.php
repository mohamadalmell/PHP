<?php
$var1 = 32;
$var2 = 45;

function swap($a, $b){
    $var = $a;
    $a = $b;
    $b = $var;
    echo "var1: $a\nvar2: $b\n";
}

swap($var1, $var2);
?>