<?php

$age = 20;

if($age >= 18){
    echo "You can drive!";
}elseif($age >= 16){
    echo "You can drive as an apprendice!";
} 
else{
    echo "You must await to drive!";
}

/*
> bigger
>= bigger equal
< lower 
<= lower equal
== equal
!= is not equal
*/
echo "<br>";
$letter = "a";

if($letter == "a"){
    echo $letter." is equal 'a'";
}else{
    echo $letter." is not equal 'a'";
}

?>