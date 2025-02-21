<?php
require_once("classes/Circle.php");

$circle = new Circle(15);


echo $circle->calcArea();

echo "<pre>";
var_dump($circle);
echo "</pre>";