<?php
function is_Planidrome($string){
     return strrev($string) === $string ? "It is a Planidrome!" : "It is not a Palindrome!";
}
print is_Planidrome("racecar");
?>