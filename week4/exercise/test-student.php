<?php
require_once('classes/Student.php');

$student = new Student;


$student->setName("Lisa");
$student->setPhone("78452975");

$student->studentId = 1010;

echo "<pre>";
var_dump($student);
echo "</pre>";
?>