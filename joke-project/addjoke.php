<?php
//set form title
$title = "Add new joke";
ob_start();
//connect to db
include "includes/DatabaseConnection.php";

//case 1: user already submit the form (click Add button)
if (isset($_POST['add'])) {
    //get data from "add joke form"
    $text = $_POST['joke_text'];
    $author = $_POST['author_id'];
    $category = $_POST['category_id'];
    //set "joke date" by current date from system
    $date = date('Y-m-d');
    //create SQL statement to insert data to table "jokes"
    $sql = "INSERT INTO jokes (joke_text, joke_date, author_id, category_id)
            VALUES(:text, :date, :author, :category)";
    //prepare statement
    $statement = $pdo->prepare($sql);
    //pass value to "placeholders"
    $statement->bindValue(":text", $text);
    $statement->bindValue(":date", $date);
    $statement->bindValue(":author", $author);
    $statement->bindValue(":category", $category);
    //run statement
    $statement->execute();
    //redirect to joke list page
    header("location: jokes.php");
}

//case 2: user did not submit form => render form
else {
   /* get data from authors & categories table
   to pass to drop-down list */
   $sql1 = "SELECT * FROM authors";
   $authors = $pdo->query($sql1);

   $sql2 = "SELECT * FROM categories";
   $categories = $pdo->query($sql2);

   //render form
   include 'templates/addjoke.html.php';
}

$output = ob_get_clean();
include 'templates/layout.html.php';

?>