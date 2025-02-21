<?php
require_once('classes/Teacher.php');

$teacher = new Teacher;


$teacher->setName("Suzan");
$teacher->setPhone("514777-8888");

$teacher->teacherId = 7878;
$teacher->salary = 25.95;

echo "<pre>";
var_dump($teacher);
echo "</pre>";
?>