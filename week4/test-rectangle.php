<?php
require_once("classes/Rectangle.php");

$rectangle = new Rectangle(15, 20);


echo $rectangle->calcArea();

echo "<pre>";
var_dump($rectangle);
echo "</pre>";