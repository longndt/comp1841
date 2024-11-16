<?php
include 'DatabaseConnection.php';

function countTotal($pdo, $table) {
   $sql = "SELECT COUNT(*) FROM $table";
   $query = $pdo->prepare($sql);
   $query->execute();
   $result = $query->fetch();
   return $result[0];
}

function deleteRecord ($pdo, $table, $id) {
   $sql = "DELETE FROM $table WHERE id = :id";
   $stm = $pdo->prepare($sql);
   $stm->bindValue(":id", $id);
   $stm->execute();
   echo "Delete record succeed !";
}

?>