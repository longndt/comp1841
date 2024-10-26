<?php
include "includes/DatabaseConnection.php";

$sql = "DELETE FROM authors WHERE author_id = :id";
$statement = $pdo->prepare($sql);
$statement->bindValue(":id", $_POST['id']);
$statement->execute();
header("location: authors.php");
