<?php
//set title
$title = "Edit joke";
ob_start();
//connect to db
include "includes/DatabaseConnection.php";

//case 1: process form (if user already submit form)
if (isset($_POST['edit'])) {
   //get data from "edit joke form"
      $id = $_POST['joke_id'];
      $text = $_POST['joke_text'];
      $author = $_POST['author_id'];
      $category = $_POST['category_id'];
      //create SQL statement to edit data in "jokes" table
      $sql = "UPDATE jokes
              SET joke_text = :text,
                  author_id = :author,
                  category_id = :category
              WHERE joke_id = :id";
      //prepare statement
      $stm = $pdo->prepare($sql);
      //pass value to "placeholders"
      $stm->bindValue(":id", $id);
      $stm->bindValue(":text", $text);
      $stm->bindValue(":author", $author);
      $stm->bindValue(":category", $category);
      //run statement
      $stm->execute();
      //redirect to joke list page
      header("location: jokes.php");
}
//case 2: render form (if user did not submit form)
else {
  //get joke id from URL (GET method)
  $id = $_GET['id'];
  //get joke data from joke id
  $sql = "SELECT * FROM jokes WHERE joke_id = :id";
  //prepare statement (stm)
  $stm = $pdo->prepare($sql);
  //bind value
  $stm->bindValue(":id", $id);
  //execute (run) sql
  $stm->execute();
  //fetch data then save to variable
  $joke = $stm->fetch();
  //render edit form

  //get data from "authors" & "categories" table to display in 2 drop-down lists
  $sql1 = "SELECT * FROM authors";
  $authors = $pdo->query($sql1);

  $sql2 = "SELECT * FROM categories";
  $categories = $pdo->query($sql2);
  include "templates/editjoke.html.php";
}

$output = ob_get_clean();
include 'templates/layout.html.php';


