<?php
function is_Prime($n){
    for ($i=2; $i <$n ; $i++) { 
        if ($n % $i == 0) {
            return "It is not a Prime number";
        }
    }
    return "It is a Prime number";
}
print is_Prime(15);
?>