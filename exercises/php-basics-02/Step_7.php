<?php
function replace($arr){
    if (strlen($arr) <= 1000) {
        print_r(str_replace("Python","PHP",$arr));
    }
}
replace("Python is the best!")
?>