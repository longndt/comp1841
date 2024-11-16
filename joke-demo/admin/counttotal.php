<?php
include "includes/CountFunction.php";
$total_jokes =
countTotal($pdo, "jokes");
echo "Total Jokes: " . $total_jokes  . "<br>";

$total_authors =
   countTotal($pdo, "authors");
echo "Total Authors: " . $total_authors . "<br>";
?>