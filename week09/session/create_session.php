<?php
//start a new session
session_start();

//declare a global session variable
$_SESSION['text'] = "PHP";

echo "<h1>Create session succeed !</h1>";
?>