<?php
function pers($personal_details){
    $personal_details = array(
        "name" => "Rajesh Rao",
         "occupation" => "Engineer",
          "age" => 39,
           "country" => "India"
    );
    foreach ( $personal_details as $key => $value ){
    echo "$key=$value\n";
    }
}

print pers("Mohamad");
?>