<?php

function greet(){
    return "Salut folks!";
}

echo greet();
echo "<br>";

function hello($name = "Students"){
    return "Hello ".$name."!";
}

echo hello("Peter");
echo "<br>";

function sum($a, $b, $c = null){
    $r = $a + $b + $c;
    return $r;
}

echo sum(60, 25);

