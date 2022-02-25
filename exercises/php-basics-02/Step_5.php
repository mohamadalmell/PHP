<?php
function converter($word){ 
    $words = explode(';', $word);
    foreach ($words as  $value) {
        switch ($value) {
            case $value == 'zero':
                echo 0;
                break;
            case $value == 'one':
                echo 1;
                break;
            case $value == 'two':
                echo 2;
                break;
            case $value == 'three':
                echo 3;
                break;
            case $value == 'four':
                echo 4;
                break;
            case $value == 'five':
                echo 5;
                break;
            case $value == 'six':
                echo 6;
                break;
            case $value == 'seven':
                echo 7;
                break;
            case $value == 'eight':
                echo 8;
                break;
            case $value == 'nine':
                echo 9;
                break;
        }
    }     
}
converter('one;two');
?>