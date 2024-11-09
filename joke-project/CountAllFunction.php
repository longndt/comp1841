<?php
include "includes/DatabaseConnection.php";

function totalRows($pdo, $table_name)
{
   $sql = "SELECT COUNT(*) FROM " . $table_name;
   $query = $pdo->prepare($sql);
   $query->execute();
   $row = $query->fetch();
   return $row[0];  //1st column --> index 0
}
