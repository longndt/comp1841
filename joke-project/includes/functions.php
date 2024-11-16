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

function getData($pdo, $sql)
{
   return $pdo->query($sql);
}

function start()
{
   ob_start();
   include 'includes/DatabaseConnection.php';
}

function clean()
{
   $output = ob_get_clean();
   include 'templates/layout.html.php';
}
