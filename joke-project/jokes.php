<?php
$title = "Joke List";
ob_start();

//connect to DB
include 'includes/DatabaseConnection.php';
//create SQL statement
$sql = "SELECT * FROM jokes";
//execute (run) SQL and save result to an array
$jokes = $pdo->query($sql);

include 'templates/jokes.html.php';
$output = ob_get_clean();
include 'templates/layout.html.php';
