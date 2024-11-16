<?php
//CREATE feature: insert data (record) to database
//check whether user has submitted form or not
if (isset($_POST['add'])) { //case 1: user has submitted the form => run sql statement
   try {
      //connect to database to insert data
      include "includes/DatabaseConnection.php";

      //1st way: using bind value
      //define sql query (statement)
      $sql = "INSERT INTO jokes (joketext, jokedate, image, authorid) VALUES (:joketext, :jokedate, :image, :author)";

      //prepare sql statement
      $stm = $pdo->prepare($sql);
      $stm->bindValue(":joketext", $_POST['joketext']);
      $stm->bindValue(":jokedate", $_POST['jokedate']);
      $stm->bindValue(":image", $_POST['image']);
      $stm->bindValue(":author", $_POST['author']);

      //2nd way: using bind param
      // $sql = "INSERT INTO jokes (joketext, jokedate, image, jokeauthor) VALUES (?, ?, ?)";
      // $stm = $pdo->prepare($sql);
      // $stm->bindParam(1,$_POST['joketext']);
      // $stm->bindParam(2, $_POST['jokedate']);
      // $stm->bindParam(3, $_POST['image']);

      //execute statement (stm)
      $stm->execute();

      //redirect page after insert successfully
      header('Location: jokes.php');

      //catch database connection error (if have)
   } catch (PDOException $e) {
      $title = 'An error has occured';
      $output = 'Database error: ' . $e->getMessage();
   }
} else { //case 2: user has not submitted the form => load the form first
   //connect to db and pass the author list for user to select in the form
   try {
      include '../includes/DatabaseConnection.php';
      $sql = 'SELECT * FROM authors';
      $authors = $pdo->query($sql);
      $title = 'Add new joke';
      ob_start();
      include '../templates/addjoke.html.php';
      $output = ob_get_clean();
   } catch (PDOException $e) {
      $title = 'An error has occured';
      $output = 'Database error: ' . $e->getMessage();
   }
}

include '../templates/layout_admin.html.php';
