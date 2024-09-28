<?php
if (!isset($_POST['login'])) {
   echo "<h1>You must login first</h1>";
   echo "<a href='form2.html'>Click here to login</a>";
} else {
   $email = $_POST["email"];
   $password = $_POST["password"];
   //check login info
   if ($email == "admin@fpt.edu.vn" && $password == "123456") {
      echo "<h1 style='color: blue;'>Login succeed !</h1>";
   } else {
      echo "<h1 style='color: red;'>Login failed !</h1>";
   }
}
?>