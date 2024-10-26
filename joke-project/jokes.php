<?php
$title = "Joke List";
ob_start();

//connect to DB
include 'includes/DatabaseConnection.php';
//create SQL statement
$sql = "SELECT *, author_name, author_email FROM jokes
       INNER JOIN authors
       ON jokes.author_id = authors.author_id";
//execute (run) SQL and save result to an array
$jokes = $pdo->query($sql);

include 'templates/jokes.html.php';
$output = ob_get_clean();
include 'templates/layout.html.php';
