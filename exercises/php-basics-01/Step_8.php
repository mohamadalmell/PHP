<?php
$grocery = array("Eggs", "Milk", "Cheese", "Water Pack", "Tissues", "Watermelon");
echo "Hello Sir, do you have $grocery[0], $grocery[1] and $grocery[2]? Also if you sell fruits can I find a $grocery[5]?\n";
$grocery2 = array (
    array("eggs", "baladi", "mazare3"),
    array("milk", "fresh", "taaynayel"),
    array("water-pack", "tannoureen", "reem")
);

echo "\nHey Sir, Please I need 1 pack of {$grocery2[0][1]} {$grocery2[0][0]} and 3 {$grocery2[2][2]} {$grocery2[2][0]}\n"

?>