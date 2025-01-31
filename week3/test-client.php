
<?php

require_once('classes/Client.php');


$client = new Client;

// $employe->name = "Peter";
$client->setName("Lisa");
echo "<pre>";
var_dump($client);
echo "</pre>";

echo $client->getMessage();