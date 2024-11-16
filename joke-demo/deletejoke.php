<?php
//try to delete the joke
try {
   //connect to database (compulsory)
   include "includes/DatabaseConnection.php";

   //prepare the sql statement to delete
   $sql = "DELETE FROM jokes WHERE id = :id";
   $stm = $pdo->prepare($sql);
   //pass the specific "id" value to "id" placeholder
   $stm->bindValue(":id", $_POST['id']);
   //run (execute) the sql query
   $stm->execute();
   //show successful message
   //echo "<h1>Delete joke succeed !</h1>";

   //redirect page after deleting successfully
   header('Location: jokes.php');
}
//catch the error if deleting joke failed
catch (PDOException $exception) {
   //show error here
   echo "Delete joke failed. Error: " . $exception;
}
