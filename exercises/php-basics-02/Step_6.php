<?php
function computer($num){
    $counter = 0;
    for ($i=0; $i <strlen($num) ; $i++) { 
        $counter += $num[$i];
    }
    return $counter;
}
echo computer("12")
?>