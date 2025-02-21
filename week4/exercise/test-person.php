<?php
require_once('classes/Person.php');

$person = new Person;

$person->setName("Peter");
$person->setPhone("34343434");

echo "My name is ".$person->getName();
echo "<br>";
echo "This is my phone number ".$person->getPhone();

echo "<pre>";
var_dump($person);
echo "</pre>";
?>