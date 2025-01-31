<?php

require_once('classes/PersonOld.php');

$obj = new Person("Peter");

$obj->address = "3800 Maisonneuve";

die();

//$obj->name = "Peter";
//$obj->setProps("Peter");
$obj->address = "Pie IX";
$obj->zipCode = "H2h2h2";
$obj->age = 15;

echo "<pre>";
var_dump($obj);
echo "</pre>";


//echo "Hello ".$obj->name;

//echo $obj->getMessage();
echo "<br>";

$obj2 = new Person('Lisa', '9000 Sherbrooke','H2H2H1');
//$obj2->setProps('Lisa', '9000 Sherbrooke','H2H2H1');
echo "<pre>";
var_dump($obj2);
echo "</pre>";

//echo $obj2->getMessage();
echo "<br>";