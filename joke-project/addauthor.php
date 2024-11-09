<?php
$title = "Add new author";
ob_start();
//connect to db
require 'includes/DatabaseConnection.php';

//check whether user submits form or not
/* case 1: user already submitted form => take
data through form and add to DB */
if (isset($_POST['add'])) {
   $name = $_POST['name'];
   $email = $_POST['email'];

   $sql = "INSERT INTO authors
         SET author_name = :name,
             author_email = :email";
   $statement = $pdo->prepare($sql);
   $statement->bindValue(":name", $name);
   $statement->bindValue(":email", $email);
   $statement->execute();
   header("location: authors.php");
}
/* case 2: user did not submit form
=> render form for user to submit */
else {
   include 'templates/addauthor.html.php';
}

$output = ob_get_clean();
include 'templates/layout.html.php';
