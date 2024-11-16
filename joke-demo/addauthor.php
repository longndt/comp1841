<?php
//render form add first
if (!isset($_POST['add'])) {
   $title = 'Add new author';
   ob_start();
   include 'templates/addauthor.html.php';
   $output = ob_get_clean();
}
//take value from form then insert to database later
else {
   require 'includes/DatabaseConnection.php';
   // $sql = "INSERT INTO authors (name, email)
   // VALUES (:name, :email)";
   $sql = "INSERT INTO authors
   SET name = :name, email = :email";
   $stm = $pdo->prepare($sql);
   $stm->bindValue(":name", $_POST['name']);
   $stm->bindValue(":email", $_POST['email']);
   $stm->execute();
   header("Location: index.php");
}
include 'templates/layout.html.php';