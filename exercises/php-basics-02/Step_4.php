<?php
function arm($a){
    $str = (string)$a;
    $m = $str[0];
    $n = $str[1];
    $o = $str[2];
    if ("$m$n$o" == $m**3 + $n**3 + $o**3) {
        echo "True\n";
    } else echo "False\n";
}

arm(372);
?>