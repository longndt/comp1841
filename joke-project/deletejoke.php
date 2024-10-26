<?php
include "includes/DatabaseConnection.php";

$sql = "DELETE FROM jokes WHERE joke_id = :id";
$statement = $pdo->prepare($sql);
$statement->bindValue(":id",$_POST['id']);
$statement->execute();
header("location: jokes.php");
?>