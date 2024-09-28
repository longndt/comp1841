<?php
// Back-end : form1.php

//check whether user has inputted data to form or not
if (!isset($_POST['submit'])) {
  echo "<h1>You must input data first</h1>";
} else {
   $first = $_POST["first_name"];
   $last = $_POST["last_name"];
   $full = $last . " " . $first;
   echo "Full Name: " . $full;
}

?>