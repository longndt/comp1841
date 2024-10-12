<?php
//Note: you must put this code to C:/xampp/htdocs to run

//connect MySQL to PHP using PDO technique
//mysql: db server
//localhost: local server
//comp1841: db name
//utf8mb4: character set
//root: default db username in Xampp
//'': default db password in Xampp (null/empty). If you use Mamp, password is 'root'
try {
   $pdo = new PDO('mysql:host=localhost;dbname=comp1841;charset=utf8mb4', 'root', '');
   echo "<h1 style='color: red;'>Connect to DB succeed !</h1>";
} catch (PDOException $error) {
   echo "<h1 style='color: red;'>Connect to DB failed ! </h1>" . $error;
}
?>