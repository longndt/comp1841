<?php
$title = "Edit author";

//connect to db
require 'includes/DatabaseConnection.php';

//check whether user submits form or not
/* case 1: user already submitted form => take
data through form and add to DB */
if (isset($_POST['edit'])) {
   $name = $_POST['name'];
   $email = $_POST['email'];

   $sql = "UPDATE authors
         SET author_name = :name,
             author_email = :email
         WHERE author_id = :id";
   $statement = $pdo->prepare($sql);
   $statement->bindValue(":id", $_POST['id']);
   $statement->bindValue(":name", $name);
   $statement->bindValue(":email", $email);
   $statement->execute();
   header("location: authors.php");
}
/* case 2: user did not submit form
=> render form for user to submit*/
else {
   //get current data of author to display on form
   $sql = "SELECT * FROM authors WHERE author_id = :id";
   $statement = $pdo->prepare($sql);
   $statement->bindValue(":id", $_GET['id']);
   $statement->execute();
   $author = $statement->fetch();
   include 'templates/editauthor.html.php';
}

$output = ob_get_clean();
include 'templates/layout.html.php';
