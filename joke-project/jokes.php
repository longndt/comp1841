<?php
include "includes/functions.php";

start();

//create SQL statement
$sql = "SELECT *, author_name, author_email, category_name FROM jokes
       INNER JOIN authors
       ON jokes.author_id = authors.author_id
       INNER JOIN categories
       ON jokes.category_id = categories.category_id";

$jokes = getData($pdo, $sql);

//declare a variable to store total jokes
$total = totalRows($pdo, "jokes");

include 'templates/jokes.html.php';

clean();