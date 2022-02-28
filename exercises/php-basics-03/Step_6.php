<?php
function star($n){
    for ($i=0; $i <$n ; $i++) { 
        for ($j=0; $j <$n ; $j++) { 
            if ($i == 0 || $i == $j || $i == $n-1) {
                echo "*";
            }
            else echo " ";
        }
        echo "\n";
    }
}
star(6);
?>