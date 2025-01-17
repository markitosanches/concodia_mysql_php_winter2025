<?php

//indexed array
$colors = array("red", "green", "blue");
$colors2 = ["red", "green", "blue"];

print_r($colors);
echo "<br>";
echo $colors[2];
echo "<br>";
//associative array
$person = ['name' => 'Peter', "age" => 25, "city" => "Montreal"];

print_r($person);
echo "<br>";
echo $person['name'];
echo "<br>";

//print_r($_SERVER);