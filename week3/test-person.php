<?php
require_once 'classes/Person.php';

$person = new Person;

// $person->language = "FR";
// $person->phone = "51454";
$person->setPhone('51454545');
echo "<pre>";
var_dump($person);
echo "</pre>";
