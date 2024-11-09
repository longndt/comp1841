<?php
$title = "Joke List";
ob_start();

include "CountAllFunction.php";

//connect to DB
include 'includes/DatabaseConnection.php';
//create SQL statement
//order by "id" descending => new record display first
$sql = "SELECT * FROM authors ORDER BY author_id DESC";
//execute (run) SQL and save result to an array
$authors = $pdo->query($sql);

$total = totalRows($pdo, "authors");

include 'templates/authors.html.php';
$output = ob_get_clean();
include 'templates/layout.html.php';
