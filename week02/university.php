<?php
//hide warnings temporarily with error_reporting
error_reporting(0);

//get parameter values from URL by "$_GET"
//variable name & parameter name can be different
$u = $_GET['university'];

//use "htmlspecialchars" to fix security hole
$u = htmlspecialchars($u, ENT_QUOTES, 'UTF-8');

//make code shorter: use "$_GET" & "htmlspecialchars" together
$c = htmlspecialchars($_GET['country'], ENT_QUOTES, 'UTF-8');;

print $u . ' - ' . $c;
?>