<?php
//get value from URL by GET method
$name = $_GET["name"];
$age = $_GET["age"];
$nationality = $_GET['nationality'];

//display value to web page
echo "Hello " . $name . "<br>";
echo "You are " . $age . " years old now" . "<br>";
echo "You come from " . $nationality;
?>