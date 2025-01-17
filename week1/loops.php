<?php

for($i = 0; $i <5; $i++){
    echo "Number :".$i."<br>";
}

$i = 0;
while ($i < 5){
    echo "Count :".$i."<br>";
    //$i = $i+1;
    $i++;
}

$colors = array("red", "green", "blue");

// $color = "red";
// $color = "green";
// $color = "blue";

foreach($colors as $color){
    echo "The color is ".$color."!<br>";
}

?>