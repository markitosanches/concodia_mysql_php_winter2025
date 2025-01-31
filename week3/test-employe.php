
<?php

require_once('classes/Employe.php');


$employe = new Employe;

// $employe->name = "Peter";
$employe->setName("Peter");
// $employe->language = "FR";
// $employe->abc = "FR";
$employe->setPhone('51454545');
echo "<pre>";
var_dump($employe);
echo "</pre>";

echo $employe->getMessage();