<?php
function power($num){
    while ($num != 0) {
        if ($num%2 != 0){
            return "$num is not power of 2";
        } else {return "$num is power of 2";} 
    }
}
print power(15);
?>