<?php
function counter($text, $word){
    $arr = explode(" ", $text);
    $x = 0;
    $total =0;
    while ($x < count($arr)) {
        if ($word == $arr[$x]) {
            $total++;
        }
        $x++;
    }
    return $total;
}
 print counter("this is it is", "is");
?>