<?php
//UPDATE feature: edit existing data from database
if (isset($_POST['edit'])) {
   try {
      require 'includes/DatabaseConnection.php';
      $sql = "UPDATE jokes
      SET joketext = :joketext,
      image = :image
      WHERE id = :id";
      $stm = $pdo->prepare($sql);
      $stm->bindValue(":joketext", $_POST['joketext']);
      $stm->bindValue(":image", $_POST['image']);
      $stm->bindValue(":id", $_POST['id']);
      $stm->execute();
      header('Location: jokes.php');
   } catch (PDOException $exception) {
      echo "Connect to DB failed" . $exception;
   }
}
else {
   try {
      include 'includes/DatabaseConnection.php';
      $sql = 'SELECT * FROM jokes WHERE id = :id';
      $stm = $pdo->prepare($sql);
      $stm->bindValue(":id", $_POST['id']);
      $stm->execute();
      $joke = $stm->fetch();
      $title = 'Editjoke';
      ob_start();
      include 'templates/editjoke.html.php';
      $output = ob_get_clean();
   } catch (PDOException $e) {
      $title = 'An error has occured';
      $output = 'Database error: ' . $e->getMessage();
   }
}
include 'templates/layout.html.php';
?>