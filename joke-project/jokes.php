<?php
$title = "Joke List";
ob_start();

//connect to DB
include 'includes/DatabaseConnection.php';

//include "CountAllFunction"
include "CountAllFunction.php";

//create SQL statement
$sql = "SELECT *, author_name, author_email, category_name FROM jokes
       INNER JOIN authors
       ON jokes.author_id = authors.author_id
       INNER JOIN categories
       ON jokes.category_id = categories.category_id";
//execute (run) SQL and save result to an array
$jokes = $pdo->query($sql);

//declare a variable to store total jokes
$total = totalRows($pdo, "jokes");

include 'templates/jokes.html.php';
$output = ob_get_clean();
include 'templates/layout.html.php';
