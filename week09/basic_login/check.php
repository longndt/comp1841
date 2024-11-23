<?php
session_start();
if (!isset($_SESSION['Authorized']) && $_SESSION['Authorized'] != "Yes") {
   //redirect to page "Unauthorized.php"
   header ("Location: Unauthorized.php");
}
?>