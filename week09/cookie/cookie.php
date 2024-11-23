<?php
//set cookie and save to browser
setcookie("university", "greenwich", time() + 360);
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Work with Cookie</title>
</head>
<body>
   <?php
   //check whether cookie is set or not
   if (isset($_COOKIE["university"])) {
      echo "Cookie value: " . $_COOKIE["university"];
   } else {
      echo "Cookie is not available";
   }
   ?>
</body>
</html>