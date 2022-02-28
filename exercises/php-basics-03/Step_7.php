<?php
function reverse($text){
    for ($i=(strlen($text)-1); $i >0  ; $i--) { 
        echo $text[$i];
    }
}

print reverse("Hello world!");
?>