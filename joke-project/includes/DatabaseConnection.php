<?php
//Use PDO technique to connect MySQL (Database) to PHP (Backend)
try {
   $db_host = 'localhost';
   $db_name = 'joke_db';
   $db_username = 'root';
   $db_password = '';

   $pdo = new PDO("mysql:host=$db_host; dbname=$db_name", $db_username, $db_password);
   //echo "connect to db succeed !";
} catch (PDOException $error) {
   echo "connect to db failed ! " . $error;
}
?>