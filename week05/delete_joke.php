<?php
//connect to db
require_once "connect_db.php";

//get id from "Delete" button (form)
$id = $_GET['id'];

//create SQL query to delete joke
$sql = "DELETE FROM jokes WHERE id = :id";

//prepare SQL query
$statement = $pdo->prepare($sql);

//bind (pass) real value of "id"
$statement->bindValue(':id', $id);

//execute (run) SQL query
$statement->execute();

//redirect to index page (joke list)
header('location: index.php');
?>